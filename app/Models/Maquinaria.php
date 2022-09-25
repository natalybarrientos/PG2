<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maquinaria extends Model
{
    use HasFactory;

    public function proyectos()
    {
        return $this->belongsToMany('App\Models\Proyecto');//Una maquinaria tiene muchos proyectos
    }
}
