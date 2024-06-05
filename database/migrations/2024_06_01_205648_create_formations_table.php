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
        Schema::create('formations', function (Blueprint $table) {
            $table->id('Id_Formation');
            $table->string('titre');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('Id_Secteur_Metier');
            $table->foreign('Id_Secteur_Metier')->references('Id_Secteur_Metier')->on('secteur_metiers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formations');
    }
};
