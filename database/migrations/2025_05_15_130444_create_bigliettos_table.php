<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bigliettos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('evento_id');
            $table->foreign('evento_id')->references('id')->on('eventos');
            $table->unsignedBigInteger('utente_id');
            $table->foreign('utente_id')->references('id')->on('utentes');
            $table->decimal('prezzo');
            $table->string('settore');
            $table->string('fila');
            $table->integer('numero');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bigliettos');
    }
};
