<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrabajadoreRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre'           => 'required|string|max:255',
            'apellido'         => 'required|string|max:255',
            'disponibilidad'   => 'required|string|max:255',
            'tarifa_por_hora'  => 'required|numeric',
            'experiencia'      => 'required|string|max:255',
            'especialidad'     => 'required|string|max:255',
            'email'            => 'required|email|max:255',
        ];
    }
}
