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
        Schema::create('job_payment_dispatches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_payment_id');
            $table->tinyInteger('is_refund');
            $table->tinyInteger('is_dispatch_successful');
            $table->string('phone_number');
            $table->float('amount');
            $table->string('response_conversation_id');
            $table->string('response_originator_conversation_id');
            $table->string('response_response_code')->nullable();





            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_payment_dispatches');
    }
};
