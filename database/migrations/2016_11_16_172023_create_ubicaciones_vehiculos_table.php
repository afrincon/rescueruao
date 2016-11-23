<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUbicacionesVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubicaciones_vehiculos', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->integer('id_vehiculo')->unsigned();
            $table->string('latitud');
            $table->string('longitud');
            $table->enum('estado', array('Disponible', 'Ocupada'));
            $table->timestamps();

            $table->foreign('id_vehiculo')->references('id')->on('vehiculos');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ubicaciones_vehiculos');
    }
}
