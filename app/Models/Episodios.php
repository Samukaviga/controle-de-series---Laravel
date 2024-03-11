<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episodios extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function temporadas(){

        return $this->belongsTo(Temporadas::class);

    }

}
