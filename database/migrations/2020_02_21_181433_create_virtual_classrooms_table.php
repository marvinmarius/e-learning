<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVirtualClassroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('virtual_classrooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('class_size');
            $table->unsignedBigInteger('teacher_id');

            $table->foreign('teacher_id')
                ->references('id')
                ->on('teachers');
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
        Schema::dropIfExists('virtual_classrooms');
    }
}
