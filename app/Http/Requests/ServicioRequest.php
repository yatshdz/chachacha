<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicioRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre'             => 'required|string|max:255',
            'descripcion'        => 'required|string',
            'costo'              => 'required|numeric',
            'duracion_aproximada'=> 'required|string|max:255',
        ];
    }
}
