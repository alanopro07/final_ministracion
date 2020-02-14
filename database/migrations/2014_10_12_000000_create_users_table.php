<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->integer('idUsuario');
            $table->integer('idRol');
            $table->char('name',128);
            $table->char('apellidoPaterno',128);
            $table->char('apellidoMaterno',128);
            $table->char('titulo',32);
            $table->integer('telefono');
            $table->integer('extension');
            $table->integer('celular');
            $table->char('login',128);
            $table->char('email',100);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->timestamp('fechaUltimaVista');
            $table->timestamp('fechaCreacion');
            $table->timestamp('fechaCaducidad');
            $table->char('comentario',500);
            $table->char('foto',64);
            $table->char('cargo',256);
            $table->char('dependencia',256);
            $table->char('direccion',512);
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
        Schema::dropIfExists('users');
    }
}
