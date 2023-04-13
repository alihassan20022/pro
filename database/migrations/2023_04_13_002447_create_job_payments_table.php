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
        Schema::create('job_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_id');
            $table->string('phone_number');
            $table->float('amount');
            $table->tinyInteger('is_payment_successful');
            $table->string('response_merchant_request_id');
            $table->string('response_checkout_request_id');
            $table->string('response_response_code');
            $table->string('callback_result_code')->nullable();
            $table->string('callback_result_desc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_payments');
    }
};
