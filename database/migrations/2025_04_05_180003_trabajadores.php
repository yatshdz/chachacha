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
        Schema::create('trabajadores', function (Blueprint $collection) {
            $collection->id();
            $collection->string('nombre');
            $collection->string('apellido');
            $collection->string('disponibilidad');     
            $collection->double('tarifa_por_hora');    
            $collection->string('experiencia');        
            $collection->string('especialidad');     
            $collection->string('email');  
            $collection->timestamps();         
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
