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
        Schema::create('temporadas', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('numero');
            $table->unsignedBigInteger('series_id');
            $table->foreign('series_id')->references('id')->on('series')->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temporadas');
    }
};
