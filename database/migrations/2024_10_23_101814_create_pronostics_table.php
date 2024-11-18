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
        Schema::create('pronostics', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable(false);
            $table->string('hours')->nullable(false);
            $table->string('sport')->nullable(false);
            $table->string('team1')->nullable(false);
            $table->string('team2')->nullable(false);
            $table->string('pronostic')->nullable(false);
            $table->float('cote')->nullable(false);
            $table->longText('excerpt')->nullable(false);
            $table->longText('content')->nullable(false);
            $table->string('thumbnail')->nullable(false);
            $table->boolean('gratuit')->default(false);
            $table->boolean('publié')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pronostics');
    }
};
