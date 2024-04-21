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
        Schema::table('evaluation_form_student', function (Blueprint $table) {
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('evaluation_form_id')->references('id')->on('evaluation_forms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('evaluation_form_student', function (Blueprint $table) {
            $table->dropForeign('student_id');
            $table->dropForeign('evaluation_form_id');
        });
    }
};
