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
        Schema::create('municipios', function (Blueprint $table) {

        $table->id('municipioID'); // Clave primaria autoincremental
        $table->string('nombre', 100); // Nombre del municipio
        $table->unsignedBigInteger('departamentoID'); // Clave foránea a `departamentos`

        $table->foreign('departamentoID')->references('departamentoID')->on('departamentos')->onDelete('cascade');

        $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('municipios');
    }
};
