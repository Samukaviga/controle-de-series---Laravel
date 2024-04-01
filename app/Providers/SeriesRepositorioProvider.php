<?php

namespace App\Providers;

use App\Repositories\EloquentSeriesRepositorio;
use App\Repositories\SeriesRepositorio;
use Illuminate\Support\ServiceProvider;

class SeriesRepositorioProvider extends ServiceProvider
{

/*
    public array $bindngs = [
        SeriesRepositorio::class => EloquentSeriesRepositorio::class
    ]; */


    public function register()
    {
        $this->app->bind(SeriesRepositorio::class, EloquentSeriesRepositorio::class);
    } 

    public function boot()
    {
        //
    }
}
