<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAfirmadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afirmadors', function (Blueprint $table) {
            $table->increments('id');
             $table->string('nombreAfirmador')->unique();
            $table->integer('id_enlace')->unsigned()->nullable();

            $table->foreign('id_enlace')->references('id')->on('enlaces')
                                                    ->onUpdate('cascade')
                                                    ->onAction('set null');
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
        Schema::dropIfExists('afirmadors');
    }
}
