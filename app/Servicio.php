<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = 'servicios';
    public $timestamps = true;
    protected $fillable = array('tipo_servicio');

    public function serviciosSolicitados()
    {
        return $this->hasMany('ServiciosPrestados', 'id_servicio');
    }
}
