<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->string('nombre')->nullable(false);
            $table->integer('codigo', 9)->unique()->nullable(false);
            $table->string('carrera')->nullable(true);
            $table->integer('creditos_cursados')->default(0);
            $table->string('correo')->unique()->nullable(true);
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
        Schema::dropIfExists('estudiantes');
    }
}
