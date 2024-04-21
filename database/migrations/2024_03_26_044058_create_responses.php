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
            $table->string('status');
            $table->unsignedBigInteger('evaluation_form_id')->nullable();
            $table->timestamps();

            $table->foreign('evaluation_form_id')->references('id')->on('evaluation_forms');
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
