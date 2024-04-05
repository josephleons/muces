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
            $table->string('firstname');
            $table->string('lastname');
            $table->string('surname');
            $table->string('gender');
            $table->string('contact');
            $table->string('email');
            $table->string('yearOfstudy');
            $table->string('semister');
            $table->string('program');
            $table->string('nida');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('program_id')->nullable();
           
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
