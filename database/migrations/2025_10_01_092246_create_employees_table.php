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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('employee_code')->unique();
            $table->string('department');
            $table->string('job_title');
            $table->date('date_of_joining');
            $table->enum('employment_type', ['full-time', 'part-time', 'contract']);
            $table->string('contact_number')->nullable();
            $table->text('address')->nullable();
            $table->string('emergency_contact')->nullable();
            $table->decimal('salary', 12, 2)->default(0.00);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
