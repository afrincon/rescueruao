<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'gender',  'name', 'email', 'password', 'id_rol',
        'address', 'phone', 'birthdate', 'bloodtype', 'height', 'health_service', 'estado'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function suscriptorServicio()
    {
        return $this->hasMany('ServiciosPrestados', 'id_suscriptor');
    }
}
