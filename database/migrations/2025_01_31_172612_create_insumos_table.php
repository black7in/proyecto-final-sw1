<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('insumos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('unidad_medidas_id');
            $table->unsignedBigInteger('categoria_id')->nullable();
            $table->string('nombre', 50);
            $table->string('descripcion', 100)->nullable();
            //$table->date('fecha_vencimiento');
            $table->integer('stock_minimo');
            $table->foreign('unidad_medidas_id')->references('id')->on('unidad_medidas');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insumos');
    }
};
