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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('gender');
            $table->string('dob');
            $table->string('registration_no');
            $table->string('accademic_year');
            $table->string('nida');
            $table->unsignedBigInteger('program_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
           
           
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students',function(Blueprint $table){
            $table->dropForeign('program_id');
            $table->dropIfExists('students');

        });
   
    }
};
