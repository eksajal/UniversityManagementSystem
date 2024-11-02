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
        Schema::table('faculties', function (Blueprint $table) {
            $table->string('dept_name')->nullable()->after('name');  // Add the dept_name column after name
            $table->string('course_title')->nullable()->after('dept_name');  // Add the course_title column after dept_name
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('faculties', function (Blueprint $table) {
            $table->dropColumn(['dept_name', 'course_title']); // Drop the columns in the rollback
        });
    }
};
