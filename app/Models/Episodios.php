<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episodios extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['numero'];

    protected $casts = ['assistido' => 'boolean'];


    public function temporadas(){

        return $this->belongsTo(Temporadas::class);

    }

    public function scopeAssistidos(Builder $query) 
    {
        $query->where('assistido', true);
    }

}
