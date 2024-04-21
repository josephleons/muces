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
        Schema::create('evaluation_form_student', function (Blueprint $table) {
            $table->primary(['student_id', 'evaluation_form_id']);
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('evaluation_form_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluation_form_student');
    }
};
