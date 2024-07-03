<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('response_questions', function (Blueprint $table) {
            $table->id();
            $table->string('response');
            $table->string('student');
            $table->string('lecturer');
            $table->string('program');
            $table->string('course');
            $table->string('status');
            $table->unsignedBigInteger('questionnaire_question_id')->nullable();
            $table->unsignedBigInteger('program_id')->nullable();
            $table->unsignedBigInteger('course_id')->nullable();
            $table->unsignedBigInteger('lecturer_id')->nullable();
            $table->timestamps();
            $table->foreign('questionnaire_question_id')->references('id')->on('questionnaire');
            $table->foreign('program_id')->references('id')->on('programs');
            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('lecturer_id')->references('id')->on('lecturer');
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('response_questions');
    }
};
