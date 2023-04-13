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
        Schema::create('job_proposals', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['sent', 'accepted', 'completed successfully', 'rejected', 'withdrawn', 'completed unsuccessfull y','work submitted', 'job expired before	work submission'])->default('sent');
            $table->string('title');
            $table->text('description');
            $table->foreignId('job_id');
            $table->foreignId('freelancer_id');
            $table->text('submission_description')->nullable();
            $table->string('submission_attachment')->nullable();
            $table->text('client_comment');
            $table->time('time_work_starts');
            $table->time('time_work_ends');
            $table->tinyInteger('24_hr_expiry_email_s ent');
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
        Schema::dropIfExists('job_proposals');
    }
};
