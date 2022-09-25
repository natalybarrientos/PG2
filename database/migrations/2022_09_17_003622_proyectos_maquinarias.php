<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProyectosMaquinarias extends Migration
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('proyectos_maquinarias', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('id_proyecto')->references('id')->on('proyectos')->constrained()->onDelete('cascade');
            $table->foreignId('id_maquinaria')->references('id')->on('maquinarias')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
