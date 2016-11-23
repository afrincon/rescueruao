<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'first_name'  =>  'Andrés',
          'last_name' =>  'Rincón',
          'gender'  =>  'Masculino',
          'name'  => 'Administrador',
          'email'  =>  'arincon@rescueruao.io',
          'password' => bcrypt('Ev4nerv1525*'),
          'id_rol'  =>  '1',
          'address' =>  'Avenida Siempre Viva 123',
          'phone' =>  '8930303',
          'estado'  =>  'Activo',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

        DB::table('users')->insert([
            'first_name'  =>  'Giovanni',
            'last_name' =>  'Cortes',
            'gender'  =>  'Masculino',
            'name'  => 'Administrador',
            'email'  =>  'gcortes@rescueruao.io',
            'password' => bcrypt('Rescuer123*'),
            'id_rol'  =>  '1',
            'address' =>  'Avenida Siempre Viva 123',
            'phone' =>  '8930303',
            'estado'  =>  'Activo',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
