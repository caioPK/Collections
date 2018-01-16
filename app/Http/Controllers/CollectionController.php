<?php

namespace youCollections\Http\Controllers;

//use Illuminate\Support\Collection;
use Alaouy\Youtube\Facades\Youtube;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use PhpParser\Node\Expr\Array_;
use youCollections\Channel;
use youCollections\Collection;
use youCollections\videosAssistido;
use youCollections\xml;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //acessando apenas as coleções do usuario logado
        $collec = Collection::where('idUser', Auth::user()->id)->get();

        return View::make('collections.index')
            ->with('collec', $collec);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //recuperando arquivo XML com canais
        $xml = xml::find(Auth::user()->id);
        $file = Storage::get($xml->filePath);
        $lista = simplexml_load_string($file);
        return View::make('collections.create')->with('xml',$lista);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //recuperando string com url dos canais e tranformando em array
        $lista = str_replace(',,','', $request->get('hlista'));
        $urls = explode('@',$lista);

        //recuprando apenas os ids de canais para salvar
        $canais = '';
        foreach ($urls as $url){
            $canal =  DB::table('channels')->where('url', $url)->value('idCanal');
            $canais = $canal.",".$canais;
        }

        //salvando a nova coleção
        $collec = new Collection();
        $collec->idUser     =   Auth::user()->id;
        $collec->nomeCollec =   $request->get('name');
        $collec->canais     =  $canais;
        $collec->save();

        Session::flash('message','Collection criada com sucesso');
        return Redirect::to('collections/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \youCollections\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function show(Collection $collection)
    {

        $videosA = collect(videosAssistido::where('idUser', Auth::user()->id)->get());
        if($videosA){
            foreach ($videosA as $videoA){
                $assistidos = $videoA->idVideo;
            }
        }

        $nomes = Collection::where('idUser', Auth::user()->id)->get();

        $lista = str_replace(',,','', $collection->canais);
        $canais = explode(',',$lista);

        //usar colletions chunk para subdivir o tamanho das paginas
        $i=0;
        foreach ($canais as $canal){
            $canal = DB::table('channels')->where('idCanal', $canal)->value('url');

            $videoList = Youtube::listChannelVideos($canal, 50);
            //fazer uma colleção dos videos e a flag de visto
            $videos[$i]=$videoList;
            $i++;

        }


        //return View::make('collections.show')->with('videos',$videos);
        return view('collections.show',['videos'=>$videos, 'nomes'=>$nomes,'collec'=>$collection]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \youCollections\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function edit(Collection $collection)
    {
        $lista = str_replace(',,','', $collection->canais);
        $canais = explode(',',$lista);
        $nomes=[];
        $i=0;
        foreach ($canais as $canal){
            $nomes[$i] = DB::table('channels')->where('idCanal', $canal)->value('nomeCanal');
            $i++;
        }

        return view('collections.edit',['collec'=>$collection, 'nomes'=>$nomes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \youCollections\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Collection $collection)
    {

        $collection->idUser     =   Auth::user()->id;
        $collection->nomeCollec =   $request->get('name');
        $collection->canais     =   $request->get('hlista');
        $collection->save();

        Session::flash('message','Collection editada com sucesso');
        return Redirect::to('collections');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \youCollections\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collection $collection)
    {
        //
    }
}
