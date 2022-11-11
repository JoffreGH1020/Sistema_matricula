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
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('carrera_id')->constrained("carreras");
            $table->string('nombres', 180);
            $table->string('apellidos', 180);
            $table->char('DNI', 8);
            $table->string('correo', 180);
            $table->integer('telefono');
            $table->integer('codigo');
            $table->string('contraseña');
            $table->char('estado', 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docentes');
    }
};
