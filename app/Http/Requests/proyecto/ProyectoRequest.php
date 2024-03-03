<?php

namespace App\Http\Requests\proyecto;

use Illuminate\Foundation\Http\FormRequest;

class ProyectoRequest extends FormRequest
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
            'nombre' => 'required | max:100',
            'link' => 'url',
            'descripcion' => 'required | string'
        ];
    }
}
