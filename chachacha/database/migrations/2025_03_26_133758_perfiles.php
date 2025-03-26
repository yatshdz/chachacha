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
        Schema::create('perfiles', function (Blueprint $coleccion) {
            $coleccion->string('id_usuario');
            $coleccion->text('experiencia')->nullable();
            $coleccion->string('disponibilidad')->nullable();
            $coleccion->decimal('tarifa_por_hora', 8, 2)->nullable();
            $coleccion->json('fotos')->nullable();
            $coleccion->float('calificacion')->default(0);
            $coleccion->integer('numero_resenas')->default(0);
            $coleccion->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
