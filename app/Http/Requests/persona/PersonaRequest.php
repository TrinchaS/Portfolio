<?php

namespace App\Http\Requests\persona;

use Illuminate\Foundation\Http\FormRequest;

class PersonaRequest extends FormRequest
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
            'nombre' => 'required | string | max:100',
            'apellido' => 'required | string | max:100',
            'foto' => 'url',
            'nacionalidad' => 'required | string | max:100',
            'fecha_nacimiento' => 'required | date',
            'estado_civil' => 'required | Rule::in(["soltero","concubinato","casado","divorciado","viudo"])', //agregar default('soltero')
            'sexo' => 'required | Rule::in(["masculino","femenino","sin aclarar"]',
            'estudio_id' => 'required | integer | exist:estudios,id',
            'habilidad_id' => 'required | integer | exist:habilidades,id',
            'experiencia_id' => 'required | integer | exist:experiencias,id',
            'proyecto_id' => 'required | integer | exist:proyectos,id'
        ];
    }
}
