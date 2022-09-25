<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipogastos extends Model
{
    use HasFactory;


    public function gastos(){
        return $this->hasMany(Gasto::Class);//Un tipo gasto tiene muchos gastos
    }
}
