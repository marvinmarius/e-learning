<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseVirtualClassroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_classrooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('virtualClassroom_id');
            $table->unsignedBigInteger('forum_id');

            $table->foreign('course_id')
                ->references('id')
                ->on('courses');

            $table->foreign('forum_id')
                ->references('id')
                ->on('forums');

            $table->foreign('virtualClassroom_id')
                ->references('id')
                ->on('virtual_classrooms')
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
        Schema::dropIfExists('course_classrooms');
    }
}
