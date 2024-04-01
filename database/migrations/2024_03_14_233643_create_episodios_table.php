<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up()
    {
        Schema::create('episodios', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('numero');
            $table->unsignedTinyInteger('assistido');
            $table->unsignedBigInteger('temporadas_id');
            $table->foreign('temporadas_id')->references('id')->on('temporadas')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('episodios');
    }
};
