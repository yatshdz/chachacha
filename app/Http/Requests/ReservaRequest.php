<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservaRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id_cliente'    => 'required|string',
            'id_trabajador' => 'required|string',
            'id_servicio'   => 'required|string',
            'fecha'         => 'required|date',
            'duracion'      => 'nullable|integer',
            'estado'        => 'required|in:pendiente,confirmada,completada,cancelada',
            'comentarios'   => 'nullable|string',
        ];
    }
}
