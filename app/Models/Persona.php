<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','apellido','foto','nacionalidad','fecha_nacimiento',
            'estado_civil','sexo','estudio_id','habilidad_id','experiencia_id','proyecto_id'
    ];

    public function estudio(){
        return $this->hasMany(Estudio::class,'estudio_id');
    }

    public function habilidad(){
        return $this->hasMany(Habilidad::class,'habilidad_id');
    }

    public function experiencia(){
        return $this->hasMany(Experiencia::class,'experiencia_id');
    }

    public function proyecto(){
        return $this->hasMany(Proyecto::class,'proyecto_id');
    }
}
