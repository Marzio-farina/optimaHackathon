<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sports', function (Blueprint $table) {
            $table->id();
            $table->string('casa');
            $table->string('ospite');
            $table->string('tipo');
            $table->foreign('id')->references('id')->on('eventos');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sports');
    }
};
