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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id');
            $table->string('title');
            $table->text('description');
            $table->string('image')->nullable();
            $table->float('pay_rate_per_hour');
            $table->float('expected_duration_in_hours');
            $table->time('receive_job');
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
        Schema::dropIfExists('jobs');
    }
};
