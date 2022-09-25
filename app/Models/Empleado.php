<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    public function proyectos(){
        return $this->hasMany(Proyecto::Class, 'empleado_id');//Un empleado tiene muchos proyecto
    }
}
