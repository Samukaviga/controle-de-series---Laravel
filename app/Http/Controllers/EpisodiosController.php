<?php

namespace App\Http\Controllers;

use App\Models\Episodios;
use App\Models\Temporadas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EpisodiosController extends Controller
{

    public function index(Temporadas $temporadas, Request $request)
    {


        $temporada = $temporadas::find($request->id);

        $mensagemSucesso = session('mensagem.sucesso');
        session()->forget('mensagem.sucesso');
        return view('episodios.index')->with('episodios', $temporada->episodios)
                                            ->with('mensagemSucesso', $mensagemSucesso);
    
    
    
    }

    public function create()
    {
        //
    }


    public function store(Temporadas $temporadas,Episodios $episodios, Request $request)
    {

     
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, Temporadas $temporadas)
    {
        DB::beginTransaction();

        $temporada = $temporadas::find($request->id);

        $episodiosAssistidos = $request->episodios != null ? $request->episodios : [] ;


        $temporada->episodios->each( function(Episodios $episodio) use ($episodiosAssistidos) {  //percorer todos episodios, e para cada um deles(EACH) vou executar uma funcao

            $episodio->assistido = in_array($episodio->id, $episodiosAssistidos); //se o ID estiver no $episodiosAssitidos vai retornar TRUE se nao vai retornar FALSE
            $episodio->save();
    
        }); 

       /*

        foreach($temporada->episodios as $episodio) {
           
            $assistido = in_array($episodio->id, $episodiosAssistidos);

            $episodiosArray[] = [
                'id' => $episodio->id,
                'temporadas_id' => $temporada->id,
                'assistido' => $assistido
            ];
        }

        foreach($episodiosArray as $episodioDado){

            $id = $episodioDado['id'];
            unset($episodioDado['id']);
            Episodios::where('id', $id)->update($episodioDado);
        } */


        DB::commit();
 
         return redirect('/temporadas/'. $request->id .'/episodios')->with('id', $request->id)
                                                                        ->with('mensagem.sucesso', 'Episodios atualizados com sucesso');
 
    }


    public function destroy($id)
    {
        //
    }
}
