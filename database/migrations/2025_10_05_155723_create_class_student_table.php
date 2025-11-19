<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('class_student', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('student_id');

            $table->integer('midterm_exam_score')->nullable();
            $table->integer('final_exam_score')->nullable();
            $table->integer('class_score')->nullable();

            $table->timestamps();


            $table->foreign('class_id')
                ->references('id')
                ->on('classes')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('student_id')
                ->references('id')
                ->on('students')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->unique(['class_id', 'student_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('class_student');
    }
};
