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
        if(Schema::hasTable('personas')){
            if(Schema::hasColumn('personas','estudio_id')){
                Schema::table('personas', function (Blueprint $table) { 
                    $table->dropForeign('personas_estudio_id_foreign');
                    $table->dropColumn('estudio_id');
                });
            }

            if(Schema::hasColumn('personas','habilidad_id')){
                Schema::table('personas', function (Blueprint $table) {
                    $table->dropForeign('personas_habilidad_id_foreign');
                    $table->dropColumn('habilidad_id');
                });
            }

            if(Schema::hasColumn('personas','experiencia_id')){
                Schema::table('personas', function (Blueprint $table) {
                    $table->dropForeign('personas_experiencia_id_foreign');
                    $table->dropColumn('experiencia_id');
                });
            }

            if(Schema::hasColumn('personas','proyecto_id')){
                Schema::table('personas', function (Blueprint $table) {
                    $table->dropForeign('personas_proyecto_id_foreign');
                    $table->dropColumn('proyecto_id');
                });
            }
        }
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if(Schema::hasTable('personas')){
            if (!Schema::hasColumn('personas','estudio_id')){
                Schema::table('personas', function (Blueprint $table) {
                    $table->unsignedBigInteger('estudio_id')->after('sexo');
                    $table->foreign('estudio_id')->references('id')->on('estudios');
                });
            }
            if (!Schema::hasColumn('personas','habilidad_id')){
                Schema::table('personas', function (Blueprint $table) {
                    $table->unsignedBigInteger('habilidad_id')->after('estudio_id');
                    $table->foreign('habilidad_id')->references('id')->on('habilidads');
                });
            }
            if (!Schema::hasColumn('personas','experiencia_id')){
                Schema::table('personas', function (Blueprint $table) {
                    $table->unsignedBigInteger('experiencia_id')->after('habilidad_id');
                    $table->foreign('experiencia_id')->references('id')->on('experiencias');
                });
            }
            if (!Schema::hasColumn('personas','proyecto_id')){
                Schema::table('personas', function (Blueprint $table) {
                    $table->unsignedBigInteger('proyecto_id')->after('experiencia_id');
                    $table->foreign('proyecto_id')->references('id')->on('proyectos');
                });
            }
        }
    }

};

