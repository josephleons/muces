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
        Schema::table('courses', function (Blueprint $table) {
            $table->foreign('program_id')->references('id')->on('programs');
            $table->foreign('lecturer_id')->references('id')->on('lecturer');
            $table->foreign('semister_id')->references('id')->on('semister');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropForeign('program_id');
            $table->dropForeign('lecturer_id');
            $table->dropForeign('semister_id');

            //
        });
    }
};
