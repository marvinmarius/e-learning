<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherOrganizationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_organization', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('organization_id');

            $table->foreign('teacher_id')
                ->references('id')
                ->on('teachers');

            $table->foreign('organization_id')
                ->references('id')
                ->on('organizations')
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
        Schema::dropIfExists('teacher_organization');
    }
}
