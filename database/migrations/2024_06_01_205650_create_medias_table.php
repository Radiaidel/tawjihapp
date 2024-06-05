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
    {   Schema::create('medias', function (Blueprint $table) {
        $table->id('Id_Media');
        $table->string('path');
        $table->enum('type', ['video', 'image', 'document']);
        $table->unsignedBigInteger('Id_Actualite')->nullable();
        $table->unsignedBigInteger('Id_Etablissemnt')->nullable();
        $table->foreign('Id_Actualite')->references('Id_Actualite')->on('actualites')->onDelete('cascade');
        $table->foreign('Id_Etablissemnt')->references('Id_Etablissemnt')->on('etablissemnts')->onDelete('cascade');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medias');
    }
};
