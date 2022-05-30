<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivotes', function (Blueprint $table) {
            $table->integer('estudiante_id');
            $table->integer('materia_id');
            $table->foreign('estudiante_id')->references('codigo')->on('estudiantes');
            $table->foreign('materia_id')->references('materia_id')->on('materias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pivotes');
    }
}
