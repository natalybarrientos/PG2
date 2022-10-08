<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGastosTable extends Migration
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('gastos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion',150);
            $table->decimal('costo',10,2);
            $table->date('fecha')->nullable();
            $table->string('factura',30)->nullable();
            $table->foreignId('tipogastos_id')->references('id')->on('tipogastos')->constrained()->onDelete('cascade');
            $table->foreignId('maquinaria_id')->nullable()->references('id')->on('maquinarias')->constrained()->onDelete('cascade');
            $table->foreignId('empleado_id')->nullable()->references('id')->on('empleados')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('gastos');
    }
}
