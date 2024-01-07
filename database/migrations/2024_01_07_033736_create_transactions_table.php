<?php

use App\Models\User;
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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_users')->constrained(table:'users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_categories')->constrained(table:'categories')->onUpdate('cascade')->onDelete('cascade');
            $table->string('buktiTransfer');
            $table->enum('statusTransaction',['approved','waiting','declined'])->default('waiting');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
