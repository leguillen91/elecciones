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
        Schema::create('votantes', function (Blueprint $table) {
            $table->id('votanteID'); // Clave primaria autoincremental
            $table->string('identidad', 15); // Identidad del votante
            $table->string('primerNombre', 50);
            $table->string('segundoNombre', 50);
            $table->string('primerApellido', 50);
            $table->string('segundoApellido', 50);
            $table->integer('edad');
            $table->string('genero', 20);
            $table->unsignedBigInteger('departamentoID'); // Clave foránea a `departamento`
            $table->unsignedBigInteger('municipioID'); // Clave foránea a `municipio`
    
            $table->foreign('departamentoID')->references('departamentoID')->on('departamentos')->onDelete('cascade');
            $table->foreign('municipioID')->references('municipioID')->on('municipios')->onDelete('no action');
    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('votantes');
    }
};
