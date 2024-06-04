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
        Schema::create('reponses', function (Blueprint $table) {
            $table->unsignedBigInteger('Id_Utilisateur');
            $table->unsignedBigInteger('Id_Choix');
            $table->primary(['Id_Utilisateur', 'Id_Choix']);
            $table->timestamps();
            
            $table->foreign('Id_Utilisateur')->references('Id_Utilisateur')->on('utilisateurs')->onDelete('cascade');
            $table->foreign('Id_Choix')->references('Id_Choix')->on('choix')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reponses');
    }
};
