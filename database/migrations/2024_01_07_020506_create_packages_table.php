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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('nameMale');
            $table->string('nameFemale')->nullable();            
            $table->string('addressAcara');
            $table->date('dateAcara');
            $table->time('waktuAcara');
            $table->string('noTelp');
            $table->string('deskripsiAcara');
            $table->string('linkGdrive');
            $table->foreignId('id_productUser')->constrained(table:'product_users')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
