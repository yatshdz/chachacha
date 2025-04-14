<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FakerPersonaController extends Controller
{
    public function obtenerPersonas(Request $request)
    {
        $cantidad = $request->input('_quantity', 1);
        $genero = $request->input('_gender');
        $fechaInicio = $request->input('_birthday_start');
        $fechaFin = $request->input('_birthday_end');

        $url = 'https://fakerapi.it/api/v2/persons';
        $params = [
            '_quantity' => $cantidad,
        ];

        if ($genero) $params['_gender'] = $genero;
        if ($fechaInicio) $params['_birthday_start'] = $fechaInicio;
        if ($fechaFin) $params['_birthday_end'] = $fechaFin;

        $response = Http::timeout(10)->get($url, $params);


        if ($response->successful()) {
            return response()->json($response->json());
        }

        return response()->json(['error' => 'No se pudo obtener información'], 500);
    }

    public function show($id)
    {
        // En este caso, simplemente buscamos en el array 'data' si el ID coincide
        $response = Http::timeout(10)->get('https://fakerapi.it/api/v2/persons/'.$id);
        
        if ($response->successful()) {
            $persona = $response->json();
            return view('fakerpersonas.show', compact('persona'));
        }

        return redirect()->route('faker.personas.index')->with('error', 'No se pudo obtener la persona.');
    }

}
