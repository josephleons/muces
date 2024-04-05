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
        Schema::table('report_evaluations', function (Blueprint $table) {
            $table->foreign('user_id')
            ->references('id')
            ->on('users');
        $table->foreign('task_id')
            ->references('id')
            ->on('tasks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('report_evaluations', function (Blueprint $table) {
            $table->dropIfExists('report_evaluations');
            $table->dropForeign(['users']);
            $table->dropForeign(['task_id']);
        });
    }
};
