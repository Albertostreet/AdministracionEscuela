<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->integer('materia_id', 9)->unique()->nullable(false);
            $table->integer('creditos')->default(1);
            $table->string('nombre')->nullable(false);
            $table->string('profesor')->nullable(false);
            $table->string('turno')->nullable(false);
            $table->boolean('disponible')->default(false);
            $table->integer('eliminado')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materias');
    }
}
