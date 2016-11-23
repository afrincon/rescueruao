<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UbicacionVehiculosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ubicaciones_vehiculos')->insert([
            'id_vehiculo'  => 1,
            'latitud'   =>  '3.405872',
            'longitud'   =>  '-76.513763',
            'estado'  =>  'Ocupada',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('ubicaciones_vehiculos')->insert([
            'id_vehiculo'  => 2,
            'latitud'   =>  '3.409064',
            'longitud'   =>  '-76.534146',
            'estado'  =>  'Disponible',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('ubicaciones_vehiculos')->insert([
            'id_vehiculo'  => 3,
            'latitud'   =>  '3.419924',
            'longitud'   =>  '-76.543029',
            'estado'  =>  'Disponible',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('ubicaciones_vehiculos')->insert([
            'id_vehiculo'  => 4,
            'latitud'   =>  '3.429924',
            'longitud'   =>  '-76.541129',
            'estado'  =>  'Disponible',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

    }
}
