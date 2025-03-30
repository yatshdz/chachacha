<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResenaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id_reserva' => 'required|integer',
            'id_cliente' => 'required|integer',
            'id_trabajador' => 'required|integer',
            'calificacion' => 'required|integer|min:1|max:5',
            'comentario' => 'nullable|string',
        ];
    }
}
