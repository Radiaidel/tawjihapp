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
        Schema::create('etablissemnts', function (Blueprint $table) {
            $table->id('Id_Etablissemnt');
            $table->string('logo', 50)->nullable();
            $table->string('nom', 50);
            $table->text('description')->nullable();
            $table->enum('type', ['public', 'privé', 'semi-public']);
            $table->string('adresse', 50);
            $table->string('ville', 50);
            $table->string('telephone', 50);
            $table->string('fax', 50)->nullable();
            $table->string('email', 50)->unique();
            $table->string('instagram_url', 50)->nullable();
            $table->string('facebook_url', 50)->nullable();
            $table->string('whatsapp_url', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etablissemnts');
    }
};
