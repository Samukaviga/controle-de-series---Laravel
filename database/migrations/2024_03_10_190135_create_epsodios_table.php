<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('epsodios', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('numero');
            $table->unsignedBigInteger('temporadas_id');
            $table->foreign('temporadas_id')->references('id')->on('temporadas');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('epsodios');
    }
};
