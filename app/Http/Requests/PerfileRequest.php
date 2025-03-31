<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;
use App\Enums\DisponibilidadEnum; // Si usas enums

class PerfileRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'role_id' => [
                'required',
                'exists:roles,_id',
                Rule::exists('roles', '_id')->where('rol', 'trabajador')
            ],
            'experiencia' => 'required|integer|min:0|max:50',
            'disponibilidad' => 'required|boolean',
            'tarifa_por_hora' => 'required|numeric|min:0|max:9999.99',
            'fotos' => 'nullable|array',
            'calificacion' => 'sometimes|numeric|min:0|max:5',
            'numero_resenas' => 'sometimes|integer|min:0'
        ];
    }

    public function messages(): array
    {
        return [
            'role_id.required' => 'Debe seleccionar un trabajador',
            'role_id.exists' => 'El trabajador seleccionado no es válido',
            'experiencia.required' => 'La experiencia es requerida',
            'experiencia.min' => 'La experiencia no puede ser negativa',
            'tarifa_por_hora.required' => 'La tarifa por hora es obligatoria',
            'tarifa_por_hora.min' => 'La tarifa no puede ser negativa',
            'disponibilidad.required' => 'Debe indicar la disponibilidad'
        ];
    }

    public function attributes(): array
    {
        return [
            'role_id' => 'Trabajador',
            'tarifa_por_hora' => 'Tarifa por hora',
            'numero_resenas' => 'Número de reseñas'
        ];
    }
    
}