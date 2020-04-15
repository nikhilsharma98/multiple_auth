<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudenttsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('password');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('aadhar_id');
            $table->string('age');
            $table->string('dob');
            $table->string('doa');
            $table->string('image');
            $table->string('gender');
            $table->string('address');
            $table->string('city');
            $table->string('state_id');
            $table->string('countary_id');
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
        Schema::dropIfExists('studentts');
    }
}
