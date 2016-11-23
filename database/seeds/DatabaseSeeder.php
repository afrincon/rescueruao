<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(VehiculosTableSeeder::class);
        $this->call(UbicacionVehiculosTableSeeder::class);
        $this->call(ServiciosTableSeeder::class);
        $this->call(SeviciosPrestadosTableSeeder::class);
    }
}
