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
            $table->string('logo')->nullable();
            $table->string('nom');
            $table->text('description')->nullable();
            $table->enum('type', ['public', 'privé', 'semi-public']);
            $table->string('adresse');
            $table->string('ville');
            $table->string('telephone');
            $table->string('fax')->nullable();
            $table->string('email')->unique();
            $table->string('instagram_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('whatsapp_url')->nullable();
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
