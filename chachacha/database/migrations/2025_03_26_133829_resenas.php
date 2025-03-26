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
        Schema::create('resenas', function (Blueprint $coleccion) {
            $coleccion->string('id_reserva');
            $coleccion->string('id_cliente');
            $coleccion->string('id_trabajador');
            $coleccion->integer('calificacion');
            $coleccion->text('comentario')->nullable();
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
