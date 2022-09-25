<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion',80);
            $table->decimal('costo',8,2);
            $table->foreignId('cliente_id')->references('id')->on('clientes')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('empleado_id')->references('id')->on('empleados')->nullable()->constrained()->onDelete('cascade');
            $table->date('fechainicio',8);
            $table->date('fechafin',80)->nullable();
            $table->enum('estado',['Iniciado','Pendiente','Finalizado'])->default('Iniciado');
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
        Schema::dropIfExists('proyectos');
    }
}

