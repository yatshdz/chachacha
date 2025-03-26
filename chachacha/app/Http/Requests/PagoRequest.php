<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PagoRequest extends FormRequest
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
            'id_reserva'   => 'required|string|max:255',
            'id_cliente'   => 'required|string|max:255',
            'monto'        => 'required|numeric',
            'estado'       => 'required|in:pendiente,completado,fallido',
            'metodo_pago'  => 'nullable|string|max:255',
        ];
    }
}
