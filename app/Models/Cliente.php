<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    public function proyectos(){
        return $this->hasMany(Proyecto::Class, 'cliente_id');//Un cliente tiene muchos proyectos
    }


}
