<?php

namespace App\Http\Requests\experiencia;

use Illuminate\Foundation\Http\FormRequest;

class ExperienciaRequest extends FormRequest
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
            'puesto' => 'required | string | max:100',
            'empresa' => 'required | string | max:150',
            'fecha_ingreso' => 'required | date',
            'fecha_egreso' => 'required | date',
            'descripcion' => 'required | string'
        ];
    }
}
