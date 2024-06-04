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
        Schema::create('offres', function (Blueprint $table) {
            $table->unsignedBigInteger('Id_Etablissemnt');
            $table->unsignedBigInteger('Id_Formation');
            $table->unsignedBigInteger('Id_Diplome');
            $table->decimal('cout', 8, 2);
            $table->primary(['Id_Etablissemnt', 'Id_Formation', 'Id_Diplome']);
            $table->foreign('Id_Etablissemnt')->references('Id_Etablissemnt')->on('etablissemnts')->onDelete('cascade');
            $table->foreign('Id_Formation')->references('Id_Formation')->on('formations')->onDelete('cascade');
            $table->foreign('Id_Diplome')->references('Id_Diplome')->on('diplomes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offres');
    }
};
