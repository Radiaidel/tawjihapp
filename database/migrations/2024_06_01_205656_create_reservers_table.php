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
        Schema::create('reserver', function (Blueprint $table) {
            $table->unsignedBigInteger('Id_Utilisateur');
            $table->unsignedBigInteger('Id_Evenement');
            $table->enum('statut', ['accepte', 'rejete', 'en attente']);
            $table->primary(['Id_Utilisateur', 'Id_Evenement']);
            $table->timestamps();
            
            $table->foreign('Id_Utilisateur')->references('Id_Utilisateur')->on('utilisateurs')->onDelete('cascade');
            $table->foreign('Id_Evenement')->references('Id_Evenement')->on('evenements')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservers');
    }
};
