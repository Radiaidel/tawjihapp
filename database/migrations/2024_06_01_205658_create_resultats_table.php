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
        Schema::create('resultats', function (Blueprint $table) {
            $table->unsignedBigInteger('Id_Utilisateur');
            $table->unsignedBigInteger('Id_Tests');
            $table->unsignedBigInteger('Id_Categories');
            $table->integer('score');
            $table->primary(['Id_Utilisateur', 'Id_Tests', 'Id_Categories']);
            $table->timestamps();
            
            $table->foreign('Id_Utilisateur')->references('Id_Utilisateur')->on('utilisateurs')->onDelete('cascade');
            $table->foreign('Id_Tests')->references('Id_Tests')->on('tests')->onDelete('cascade');
            $table->foreign('Id_Categories')->references('Id_Categories')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resultats');
    }
};
