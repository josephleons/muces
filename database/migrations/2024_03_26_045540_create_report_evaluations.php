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
        Schema::create('report_evaluations', function (Blueprint $table) {
            $table->id();
            $table->string('task');
            $table->string('Student');
            $table->string('due date');
            $table->string('rating');
            $table->string('remark');
            $table->string('perfomance_aveg');
            $table->string('Evaluator');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('task_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report_evaluations');
    }
};
