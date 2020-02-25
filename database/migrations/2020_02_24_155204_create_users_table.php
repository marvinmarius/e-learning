<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('last_name')->nullable();
            $table->string('slug');
            $table->dateTime('last_connexion_date');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('picture')->nullable();
            $table->unsignedBigInteger('group_id');
            $table->unsignedBigInteger('subscription_id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('forum_id');

            $table->foreign('group_id')
                ->references('id')
                ->on('groups');

            $table->foreign('subscription_id')
                ->references('id')
                ->on('subscriptions');

            $table->foreign('student_id')
                ->references('id')
                ->on('students');

            $table->foreign('teacher_id')
                ->references('id')
                ->on('teachers');

            $table->foreign('forum_id')
                ->references('id')
                ->on('forums')
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
        Schema::dropIfExists('users');
    }
}
