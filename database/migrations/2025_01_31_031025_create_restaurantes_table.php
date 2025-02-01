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
        Schema::create('restaurantes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('pais', 50);
            $table->string('ciudad', 50);
            $table->string('direccion', 100);
            $table->string('telefono', 50)->nullable();
            $table->string('descripcion', 100)->nullable();
            $table->string('logo', 100)->nullable();

            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurantes');
    }
};
