<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname',300);
            $table->string('lastname',300);
            $table->string('email',300);
            $table->string('address',500);
            $table->string('celphone',200);
            $table->unsignedInteger('pais_id');
            $table->unsignedInteger('departamento_id');
            $table->unsignedInteger('municipio_id');
            $table->foreign('pais_id')->references('id')->on('paises');
            $table->foreign('departamento_id')->references('id')->on('departamentos');
            $table->foreign('municipio_id')->references('id')->on('municipios');
            
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
        Schema::dropIfExists('personas');
    }
}
