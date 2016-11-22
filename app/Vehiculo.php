<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculos';
    public $timestamps = true;
    protected $fillable = array('placa', 'tipo', 'estado');

    public function vehiculoUbicacion()
    {
        return $this->hasMany('App\UbicacionesVehiculos', 'id_vehiculo');
    }
}
