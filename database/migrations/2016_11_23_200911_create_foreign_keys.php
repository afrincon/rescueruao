<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('servicios_prestados', function(Blueprint $table) {
			$table->foreign('id_servicio')->references('id')->on('servicios');
		});
		Schema::table('servicios_prestados', function(Blueprint $table) {
			$table->foreign('id_suscriptor')->references('id')->on('usuarios');
		});
	}

	public function down()
	{
		Schema::table('servicios_prestados', function(Blueprint $table) {
			$table->dropForeign('servicios_prestados_id_servicio_foreign');
		});
		Schema::table('servicios_prestados', function(Blueprint $table) {
			$table->dropForeign('servicios_prestados_id_suscriptor_foreign');
		});
	}
}