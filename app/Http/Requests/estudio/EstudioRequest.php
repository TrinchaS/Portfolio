<?php

namespace App\Http\Requests\estudio;

use Illuminate\Foundation\Http\FormRequest;

class EstudioRequest extends FormRequest
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
            'titulo' => 'required | string | max:100',
            'instituto' => 'required | string | max:150',
            'certificado' => 'url',
            'fecha_inicio' => 'required | date',
            'fecha_finalizacion' => 'required | date',
            'descripcion' => 'required | string'
        ];
    }
}
