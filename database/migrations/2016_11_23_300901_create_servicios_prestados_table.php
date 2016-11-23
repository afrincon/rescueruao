<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServiciosPrestadosTable extends Migration {

	public function up()
	{
		Schema::create('servicios_prestados', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_servicio')->unsigned();
			$table->integer('id_suscriptor')->unsigned();
			$table->string('latitud_origen');
			$table->string('longitud_origen');
			$table->timestamps();

            $table->foreign('id_servicio')->references('id')->on('servicios');
            $table->foreign('id_suscriptor')->references('id')->on('usuarios');
		});
	}

	public function down()
	{
		Schema::drop('servicios_prestados');
	}
}