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
        Schema::create('perfiles', function (Blueprint $collection) {
            // Relación con la colección 'roles' usando ObjectId
            $collection->objectId('role_id');  // Corregido de 'id_usuario' a 'role_id'
            
            // Campos corregidos según los datos mostrados en MongoDB
            $collection->integer('experiencia');    // De texto a entero (ej: "1_" -> 1)
            $collection->boolean('disponibilidad'); // De string a booleano (ej: "1_" -> true)
            $collection->float('tarifa_por_hora'); // Decimal a float (ej: "100_" -> 100.00)
            
            // Campos opcionales
            $collection->json('fotos')->nullable();
            
            // Campos con valores por defecto
            $collection->float('calificacion')->default(0);
            $collection->integer('numero_resenas')->default(0);
            
            $collection->timestamps();

            // Índice para optimizar búsquedas por role_id
            $collection->index('role_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('perfiles');
    }
};