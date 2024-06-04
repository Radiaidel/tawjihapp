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
        Schema::create('choix', function (Blueprint $table) {
            $table->id('Id_Choix');
            $table->text('choix_text');
            $table->integer('point');
            $table->unsignedBigInteger('Id_Question');
            $table->foreign('Id_Question')->references('Id_Question')->on('questions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('choix');
    }
};
