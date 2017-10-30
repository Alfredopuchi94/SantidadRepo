<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscipuladoNsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discipulado_ns', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Cedula');
            $table->enum('genero', ['masculino','femenino'])->default('masculino');
            $table->date('fechaIni');
            $table->date('fechaFin');
            $table->enum('clase1', ['si','no'])->default('no');
            $table->enum('clase2', ['si','no'])->default('no');
            $table->enum('clase3', ['si','no'])->default('no');
            $table->enum('clase4', ['si','no'])->default('no');
            $table->enum('clase5', ['si','no'])->default('no');
            $table->enum('clase6', ['si','no'])->default('no');
            $table->enum('clase7', ['si','no'])->default('no');
            $table->enum('clase8', ['si','no'])->default('no');
            $table->integer('total');
            $table->string('dicipulador');
            $table->integer('cedulaCreyente')->unsigned();

            $table->foreign('CedulaCreyente')->references('cedula')->on('nuevos_creyentes')->onDelete('no action');
            
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
        Schema::dropIfExists('discipulado_ns');
    }
}
