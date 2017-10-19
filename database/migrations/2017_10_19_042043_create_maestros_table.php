<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaestrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maestros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('cedula')->unique();
            $table->date('nacimiento');
            $table->integer('edad');
            $table->integer('telf');
            $table->string('dire');
            $table->string('correo');
            $table->enum('estcivil', ['soltero','casado','divorciado','viudo','unionlibre']);
            $table->enum('bautizado', ['si','no']);
            $table->string('tiempo');
            $table->string('profesion');
            $table->string('estu');
            $table->enum('servicio', ['maestro','colaborador']);
            $table->enum('talento', ['manualidades','pinturas','deportes','animacion','teatro','decoracion']);
            $table->string('image');
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
        Schema::dropIfExists('maestros');
    }
}
