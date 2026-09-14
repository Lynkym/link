<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('job_offers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('company');
            $table->string('location');
            $table->enum('work_mode', ['remote', 'onsite', 'hybrid'])->default('remote');
            $table->string('salary_min')->nullable();
            $table->string('salary_max')->nullable();
            $table->text('description');
            $table->json('stack')->nullable();
            $table->enum('status', ['active', 'pending', 'closed'])->default('pending');
            $table->string('contact_email')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('job_offers');
    }
};
