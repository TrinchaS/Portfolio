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
        if(Schema::hasTable('personas') && Schema::hasColumn('personas','contacto_id')){
            Schema::table('personas', function (Blueprint $table) {
                $table->dropForeign('personas_contacto_id_foreign');
                $table->dropColumn('contacto_id');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if(Schema::hasTable('personas') && !Schema::hasColumn('personas','contacto_id')){
            Schema::table('personas', function (Blueprint $table) {
                $table->unsignedBigInteger('contacto_id')->after('sexo');
                $table->foreign('contacto_id')->references('id')->on('contactos');
            });
        }
    }
};
