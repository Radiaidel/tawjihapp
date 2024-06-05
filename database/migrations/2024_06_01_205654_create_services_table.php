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
        Schema::create('services', function (Blueprint $table) {
            $table->id('Id_Service');
            $table->string('titre');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('Id_Categorie_Service');
            $table->unsignedBigInteger('Id_Partenaire');
            $table->foreign('Id_Categorie_Service')->references('Id_Categorie_Service')->on('categorie_services')->onDelete('cascade');
            $table->foreign('Id_Partenaire')->references('Id_Partenaire')->on('partenaires')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
