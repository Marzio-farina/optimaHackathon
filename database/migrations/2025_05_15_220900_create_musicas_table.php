<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('musicas', function (Blueprint $table) {
            $table->id();
            $table->string('artista');
            $table->string('genere');
            $table->foreign('id')->references('id')->on('eventos');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('musicas');
    }
};
