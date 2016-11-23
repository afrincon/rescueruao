<?php

use Illuminate\Database\Seeder;

class VehiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehiculos')->insert([
            'placa'  => 'VCM-065',
            'tipo'   =>  'tipo1',
            'estado'  =>  'Activo',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('vehiculos')->insert([
            'placa'  => 'VCM-066',
            'tipo'   =>  'tipo2',
            'estado'  =>  'Activo',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('vehiculos')->insert([
            'placa'  => 'VCM-067',
            'tipo'   =>  'tipo1',
            'estado'  =>  'Activo',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('vehiculos')->insert([
            'placa'  => 'VCM-068',
            'tipo'   =>  'tipo2',
            'estado'  =>  'Activo',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
