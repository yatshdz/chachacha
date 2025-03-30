<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id_cliente'    => 'required|string|max:255',
            'id_trabajador' => 'required|string|max:255',
            'fecha'         => 'required|date',
            'duracion'      => 'nullable|integer',
            'estado'        => 'required|in:pendiente,confirmada,completada,cancelada',
        ];
    }
}
