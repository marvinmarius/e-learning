<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseQuizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_quiz', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('quiz_id');

            $table->foreign('course_id')
                ->references('id')
                ->on('courses')
                ->onDelete('cascade');

            $table->foreign('quiz_id')
                ->references('id')
                ->on('quizzes')
                ->onDelete('cascade');
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
        Schema::dropIfExists('course_quiz');
    }
}
