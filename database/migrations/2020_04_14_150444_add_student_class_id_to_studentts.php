<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStudentClassIdToStudentts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('studentts', function (Blueprint $table) {
            //
            $table->integer('student_class_id')->nullable(false);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('studentts', function (Blueprint $table) {
            //
            $table->dropColumn('student_class_id');

        });
    }
}
