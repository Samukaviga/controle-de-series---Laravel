<?php


namespace App\Repositories;

use App\Http\Requests\SeriesFormRequest;

interface SeriesRepositorio 
{

    public function add(SeriesFormRequest $request);


}