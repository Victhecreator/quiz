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
        Schema::create('exam_info', function (Blueprint $table) {
            $table->id("id");
            $table->uuid("exam_id");
            $table->integer("user_id");
            $table->integer("course_id");
            $table->datetime("date_ended")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_info');
    }
};
