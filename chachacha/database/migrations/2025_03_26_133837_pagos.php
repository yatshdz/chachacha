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
        Schema::create('pagos', function (Blueprint $coleccion) {
            $coleccion->string('id_reserva');
            $coleccion->string('id_cliente');
            $coleccion->decimal('monto', 10, 2);
            $coleccion->enum('estado', ['pendiente', 'completado', 'fallido'])->default('pendiente');
            $coleccion->string('metodo_pago')->nullable();
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
