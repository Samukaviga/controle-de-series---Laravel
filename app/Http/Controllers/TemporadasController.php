<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Temporadas;
use App\Models\Series;


class TemporadasController extends Controller
{
    
    public function index(Series $series, Request $request)
    {

        $serie = $series::find($request->id);
        
        $temporadas = $serie->temporadas()->with('episodios')->get(); //pegando todas temporadas com seus episodios
        
       // $temporadas = $series->temporadas; //chamando uma colecion. com () seria o relacionamento

        return view('temporadas.index')->with('temporadas', $temporadas)->with('serie', $serie);

    }

}
