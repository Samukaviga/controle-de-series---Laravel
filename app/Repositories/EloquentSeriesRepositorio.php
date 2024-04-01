<?php 

namespace App\Repositories;

use App\Http\Requests\SeriesFormRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Series;
use App\Models\Temporadas;
use App\Models\Episodios;

class EloquentSeriesRepositorio implements SeriesRepositorio
{

    public function add(SeriesFormRequest $request) : Series
    {
        
        DB::beginTransaction();

                $serie = Series::create($request->all());
            
                $temporadas = [];

                for($i = 1; $i <= $request->temporadas; $i++ ) {

                    $temporadas[] = [
                        'series_id' => $serie->id,
                        'numero' => $i
                    ]; 
                }

                Temporadas::insert($temporadas);
                
                $episodios = [];
                foreach($serie->temporadas as $temporada){

                    for($j = 1; $j <= $request->episodios; $j++){

                        $episodios[] = [
                            'temporadas_id' => $temporada->id,
                            'numero' => $j
                        ];
                    }
                }

                Episodios::insert($episodios);

        DB::commit();

        return $serie;
    }
}