<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradeUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade_users', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('grade_id');
            $table->unsignedInteger('user_id')->unique();

            $table->foreign('grade_id')
                ->references('id')
                ->on('grades')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grade_users');
    }
}
