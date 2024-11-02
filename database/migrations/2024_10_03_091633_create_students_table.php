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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('student_number')->nullable();
            $table->string('guardian_number')->nullable();
            $table->string('student_id')->nullable();
            $table->string('department')->nullable();
            $table->string('address')->nullable();
            $table->string('student_img')->nullable();


            $table->string('department_id')->nullable();
            $table->string('course_id')->nullable();

            $table->foreign('department_id')->references('id')->on('departments')->onDelete('set null');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('set null');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
