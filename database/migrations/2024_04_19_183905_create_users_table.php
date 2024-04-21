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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('username')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('password')->nullable();
            $table->enum('role', ['admin', 'petugas', 'juri', 'user'])->default('user');
            $table->string('google_id')->nullable();
            $table->string('instansi')->nullable();
            $table->string('kontak')->nullable();
            $table->string('nik')->nullable();
            $table->string('images')->nullable();
            $table->string('verification_token')->nullable(); // Adding the verification_token column
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
