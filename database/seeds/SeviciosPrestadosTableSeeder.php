<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SeviciosPrestadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicios_prestados')->insert([
            'id_servicio'  => '1',
            'id_suscriptor'  => '3',
            'latitud_origen'  => '3.405972',
            'longitud_origen'  => '-76.514763',
            'estado'  => 'Activo',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('servicios_prestados')->insert([
            'id_servicio'  => '2',
            'id_suscriptor'  => '4',
            'latitud_origen'  => '3.425972',
            'longitud_origen'  => '-76.524763',
            'estado'  => 'Activo',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}