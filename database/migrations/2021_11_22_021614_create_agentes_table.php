<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agentes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre','50');
            $table->integer('telefono');
            $table->string('correo','50');
            $table->string('imagen','50');
            $table->string('detalle','250');
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
        Schema::dropIfExists('agentes');
    }
}
