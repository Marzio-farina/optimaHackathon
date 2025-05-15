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
            $table->string('artista',50)->nullable();
            $table->string('genere',30)->nullable();
            $table->string('squadra_casa',50)->nullable();
            $table->string('squadra_ospite',50)->nullable();
            $table->string('tipo_sport',30)->nullable();
            $table->string('relatore',50)->nullable();
            $table->string('argomento',100)->nullable();
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
