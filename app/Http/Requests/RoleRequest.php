<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Permitir a todos los usuarios enviar el formulario
    }

    public function rules(): array
    {
        return [
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'rol' => 'required|in:cliente,trabajador',
            'verificado' => 'required|boolean'
        ];
    }

    // Mensajes de validación personalizados
    public function messages(): array
    {
        return [
            'nombre.required' => 'El campo nombre es obligatorio',
            'apellido.required' => 'El campo apellido es obligatorio',
            'rol.required' => 'Debe seleccionar un rol',
            'rol.in' => 'Rol no válido',
            'verificado.required' => 'Debe especificar si está verificado',
            'verificado.boolean' => 'Valor no válido para verificación'
        ];
    }

    // Nombres de campos personalizados
    public function attributes(): array
    {
        return [
            'nombre' => 'nombre',
            'apellido' => 'apellido',
            'rol' => 'rol',
            'verificado' => 'verificado'
        ];
    }
}