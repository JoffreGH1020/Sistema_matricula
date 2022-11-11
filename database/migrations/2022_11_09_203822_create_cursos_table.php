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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('carrera_id')->constrained("carreras");
            $table->string('tipo_de_estudio', 3);
            $table->string('asignatura', 100);
            $table->integer('ciclo');
            $table->integer('creditos');
            $table->integer('HT_sema');
            $table->integer('HP_sema');
            $table->integer('TH_sema');
            $table->integer('HT_seme');
            $table->integer('HP_seme');
            $table->integer('TH_seme');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
};
