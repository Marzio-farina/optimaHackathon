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
        Schema::create('categoria_eventos', function (Blueprint $table) {
            $table->id();
            $table->string('artista');
            $table->string('genere');
            $table->string('squadra_casa');
            $table->string('squadra_ospite');
            $table->string('tipo_sport');
            $table->string('relatore');
            $table->string('argomento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categoria_eventos');
    }
};
