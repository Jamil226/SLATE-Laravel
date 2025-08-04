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
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->string('reference_number', 100)->default('null');
            $table->string('company_name', 100)->default('null');
            $table->string('company_address', 100)->default('null');
            $table->string('company_history', 500)->default('null');
            $table->string('registraion_number', 100)->default('null');
            $table->string('company_partners', 500)->default('null');
            $table->string('ceo_name', 100)->default('null');
            $table->string('ceo_message', 1000)->default('null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about');
    }
};