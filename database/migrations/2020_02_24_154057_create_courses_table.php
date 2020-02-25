<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description');
            $table->text('content');
            $table->string('slug');
            $table->string('video')->nullable();
            $table->string('picture')->nullable();
            $table->enum('status', ['PUBLISHED' ,'PENDING','REJECTED'])->default('PENDING');
            $table->unsignedBigInteger('subcategory_id');
            $table->unsignedBigInteger('teacher_id');


            $table->foreign('subcategory_id')
                ->references('id')
                ->on('sub_categories')
                ->onDelete('cascade');

            $table->foreign('teacher_id')
                ->references('id')
                ->on('teachers');


            $table->softDeletes();
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
        Schema::dropIfExists('courses');
    }
}
