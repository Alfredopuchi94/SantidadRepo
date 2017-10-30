<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNuevoCreyentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nuevo_creyentes', function (Blueprint $table) {
            
            $table->integer('cedula');
            $table->primary('cedula');
            $table->string('nombrePersona');
            $table->integer('ano');
            $table->date('fechaServicio');
            $table->string('descripcion');
            $table->integer('edad');
            $table->string('dire')->nullable();
            $table->integer('telf')->nullable();
            $table->string('email')->nullable();
            $table->string('invitacion')->nullable();
            $table->string('oracion')->nullable();
            $table->string('lider')->nullable();
            $table->integer('id_afirmador')->unsigned();

            $table->foreign('id_afirmador')->references('id')->on('afirmadors')->onDelete('no action');
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
        Schema::dropIfExists('nuevo_creyentes');
    }
}
