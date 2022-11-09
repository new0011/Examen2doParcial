<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbCyber extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_cyber', function (Blueprint $table) {
            $table->string('Usuario');
            $table->integer('NumeroCompu');
            $table->time('Tiempo');
            $table->date('Fecha');
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
        Schema::dropIfExists('tb_cyber');
    }
}
