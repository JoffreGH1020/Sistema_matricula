<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programa_ademicos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('malla_id')->constrained("mallas");
            $table->foreignId('cursos_id')->constrained("cursos");
            $table->foreignId('docente_id')->constrained("docentes");
            $table->integer('carga_horaria');
            $table->integer('semestre_academico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programa_ademicos');
    }
};
