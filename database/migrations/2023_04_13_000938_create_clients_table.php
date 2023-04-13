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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('national_id')->nullable();
            $table->string('image')->nullable();
            $table->string('titel');
            $table->string('description');
            $table->enum('type', [ 'individual', 'company'])->default('company');
            $table->time('time_created');
            $table->tinyInteger('is_active');











            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
