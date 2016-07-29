<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('education_id');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->string('dob');
            $table->string('age');
            $table->string('grade');
            $table->string('school');
            $table->string('Date_of_Baptism');
            $table->string('Baptism_Church');
            $table->string('Church_Address');
            $table->string('Communion');
            $table->string('Communion_Church');
            $table->string('Confirmation');
            $table->string('Confirmation_Church');
            $table->string('email');
            $table->string('cell');
            $table->string('needs');
            $table->softDeletes();
            $table->rememberToken();
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
         Schema::drop('students');
    }
}
