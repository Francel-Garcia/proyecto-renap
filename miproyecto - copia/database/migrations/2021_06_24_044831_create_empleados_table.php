<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('Cedula');
            $table->string('Fecha_nacimiento');
            $table->string('Nonbre');
            $table->string('Apellido');
            $table->string('Direccion');
            $table->string('telefono'); 
            $table->string('Departamento'); 
            $table->string('Municipio'); 
            $table->string('Foto');
            $table->string('Email');
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
        Schema::dropIfExists('empleados');
    }
}
