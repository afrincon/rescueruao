<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->enum('gender', array('Masculino', 'Femenino'));
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('id_rol')->unsigned();
            $table->string('address');
            $table->string('phone');
            $table->string('birthdate')->nullable();
            $table->string('bloodtype')->nullable();
            $table->string('height')->nullable();
            $table->string('health_service')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
