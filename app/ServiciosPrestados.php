<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiciosPrestados extends Model {

	protected $table = 'servicios_prestados';
	public $timestamps = true;
	protected $fillable = array('id_servicio', 'id_suscriptor', 'latitud_origen', 'longitud_origen', 'estado');

}