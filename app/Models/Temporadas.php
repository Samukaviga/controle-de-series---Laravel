<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temporadas extends Model
{
    use HasFactory;
    protected $fillable = ['numero'];
    public $timestamps = true;

    public function series(){
        
        return $this->belongsTo(Series::class);

    }

    public function episodios(){

        return $this->hasMany(Episodios::class);

    }

    public function NumeroDeEpisodiosAssistidos() : int 
    {

       return $this->episodios->filter(fn ($episodio) => $episodio->assistido)->count();
    }
}
