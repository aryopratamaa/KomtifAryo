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
        Schema::create('skeduls', function (Blueprint $table) {
            $table->id();
            $table->foreignId('User_id')
                ->constrained('users')
                ->onDelete('cascade');
            $table->date('tgltugas');
            $table->enum('shift', ['pagi','siang'])->default('pagi');
            $table->foreignId('Role_id')
                ->constrained('roles')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skeduls');
    }
};
