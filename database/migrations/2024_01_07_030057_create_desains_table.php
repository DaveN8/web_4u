<?php

use App\Models\ProductUser;
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
        Schema::create('desains', function (Blueprint $table) {
            $table->id();
            $table->string('templateProduct');
            $table->string('deskripsi');
            $table->enum('status',['show','hide'])->default('show');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('desains');
    }
};
