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
        Schema::create('contact', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 100)->default('null');
            $table->string('email', 100)->default('null');
            $table->string('phone', 100)->default('null');
            $table->string('subject', 100)->default('null');
            $table->string('message', 1000)->default('null');
            $table->string('ip', 100)->default('null');
            $table->string('status', 2)->default('0');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact');
    }
};