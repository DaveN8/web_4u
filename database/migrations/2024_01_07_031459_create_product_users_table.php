<?php

use App\Models\Desains;
use App\Models\Package;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_desains')->constrained(table:'desains')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_user')->constrained(table:'users')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('statusProductUsers', ['ongoing', 'done'])->default('ongoing');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_users');
    }
};
