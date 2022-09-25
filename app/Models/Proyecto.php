<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    public function maquinarias()
    {
        return $this->belongsToMany('App\Models\Maquinaria', 'proyectos_maquinarias','id_proyecto','id_maquinaria');//Muchos a muchos 
    }

    public function empleados(){
        return $this->belongsTo('App\Models\Empleado', 'empleado_id');//Un proyecto tiene un empleado
    }
    public function clientes(){
        return $this->belongsTo('App\Models\Cliente', 'cliente_id');//Un proyecto tiene un cliente
    }
    
        
    

}
