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
        Schema::create('candidatos', function (Blueprint $table) {
        $table->id('candidatoID'); // Clave primaria autoincremental
        $table->string('primerNombre', 50);
        $table->string('segundoNombre', 50);
        $table->string('primerApellido', 50);
        $table->string('segundoApellido', 50);
        $table->unsignedBigInteger('partidoID'); // Clave foránea a `partido`
        $table->unsignedBigInteger('cargoID'); // Clave foránea a `cargo`

        $table->foreign('partidoID')->references('partidoID')->on('partidos')->onDelete('cascade');
        $table->foreign('cargoID')->references('cargoID')->on('cargos')->onDelete('cascade');

        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidatos');
    }
};
