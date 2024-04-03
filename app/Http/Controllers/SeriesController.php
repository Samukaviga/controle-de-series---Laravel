<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Autenticador;
use App\Http\Requests\SeriesFormRequest;
use App\Models\Episodios;
use Illuminate\Http\Request;
use App\Models\Series;
use App\Models\Temporadas;
use App\Repositories\EloquentSeriesRepositorio;
use App\Repositories\SeriesRepositorio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{


    public function __construct(private SeriesRepositorio $repositorio)
    {
        $this->middleware('autenticador')->except('index');
    }

    
    public function index(Request $request)
    {

       // $request->get('id');
    
        $series = Series::query()->orderBy('nome')->get();

        //$mensagemSucesso = $request->session()->get('mensagem.sucesso');
        //$request->session()->forget('mensagem.sucesso'); //esquecendo mensagem
        //return view('series.index', ['series' => $series]);

        $mensagemSucesso = session('mensagem.sucesso');
        session()->forget('mensagem.sucesso');
        
        return view('series.index')->with('series', $series)
                                    ->with('mensagemSucesso', $mensagemSucesso);
    }


    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request)
    {
        $serie = $this->repositorio->add($request);
        
        return redirect('/series')->with('mensagem.sucesso', "Série '$serie->nome' adicionada com sucesso!!");
    }

    public function edit(Series $series, Request $request)
    {   
        $serie = $series::find($request->id);

        return view("series.edit")->with('id', $request->id)
                                    ->with('nome', $serie->nome);
    }

    public function update(Series $series, SeriesFormRequest $request)
    {   
        $serie = $series->find($request->id);

        $serie->nome = $request->nome;

        $serie->save();

        return redirect('/series')->with('mensagem.sucesso', "Série '$serie->nome' atualizada com sucesso!");

    }


    public function destroy(Series $serie, Request $request)
    {

        $serie = Series::find($request->id);

        Series::destroy($request->id);

       // $request->session()->put('mensagem.sucesso', "Série '$serie->nome' removida com sucesso!");

        //return redirect('/series');

        return redirect('/series')->with('mensagem.sucesso', "Série '$serie->nome' removida com sucesso!");
    }

    public function show($id)
    {
        //
    }
}
