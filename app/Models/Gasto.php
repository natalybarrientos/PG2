<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    use HasFactory;

    public function tipogasto(){
        return $this->belongsTo('App\Models\Tipogastos', 'tipogastos_id');//Un gasto tiene un tipo de gasto
    }

}
