<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServiciosTable extends Migration {

	public function up()
	{
		Schema::create('servicios', function(Blueprint $table) {
			$table->increments('id');
			$table->string('tipo_servicio');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('servicios');
	}
}