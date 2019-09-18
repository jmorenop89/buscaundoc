<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->date('fecha_nac');
            $table->string('celular');
            $table->unsignedInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users');
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
        Schema::dropIfExists('paciente');
    }
}
