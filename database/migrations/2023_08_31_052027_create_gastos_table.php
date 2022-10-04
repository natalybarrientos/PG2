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
            $table->string('descripcion',80);
            $table->decimal('costo',8,2);
            $table->date('fecha')->nullable();
            $table->string('factura',20)->nullable();
            $table->foreignId('tipogastos_id')->references('id')->on('tipogastos')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('maquinaria_id')->references('id')->on('maquinarias')->nullable()->constrained()->onDelete('cascade');
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
