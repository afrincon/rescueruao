<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UbicacionesVehiculos extends Model
{
    protected $table = 'ubicaciones_vehiculos';
    public $timestamps = true;
    protected $fillable = array('id_vehiculo','latitud', 'longitud');
}
