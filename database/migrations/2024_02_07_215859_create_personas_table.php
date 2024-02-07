<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100)->nullable(false);
            $table->string('apellido',100)->nullable(false);
            $table->string('foto',255)->default('');
            $table->string('nacionalidad',100);
            $table->date('fecha_nacimiento')->nullable(false);
            $table->enum('estado_civil',['soltero','concubinato','casado','divorciado','viudo'])->default('soltero');
            $table->enum('sexo',['masculino','femenino','sin aclarar']);
            $table->unsignedBigInteger('contacto_id');
            $table->unsignedBigInteger('estudio_id');
            $table->unsignedBigInteger('habilidad_id');
            $table->unsignedBigInteger('experiencia_id');
            $table->unsignedBigInteger('proyecto_id');
            $table->foreign('contacto_id')->references('id')->on('contactos');
            $table->foreign('estudio_id')->references('id')->on('estudios');
            $table->foreign('habilidad_id')->references('id')->on('habilidads');
            $table->foreign('experiencia_id')->references('id')->on('experiencias');
            $table->foreign('proyecto_id')->references('id')->on('proyectos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
