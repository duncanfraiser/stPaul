<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDependentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('dependents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->string('sex');
            $table->string('perferedName');
            $table->date('dob')->default('0000-00-00');
            $table->string('cellPhone');
            $table->string('email');
            $table->string('school');
            $table->string('grade');
            $table->string('active');
            $table->string('ifNo');
            $table->date('bapDate')->default('0000-00-00');
            $table->string('bapParish');
            $table->string('bapPlace');
            $table->date('recDate')->default('0000-00-00');
            $table->string('recParish');
            $table->string('recPlace');
            $table->date('commDate')->default('0000-00-00');
            $table->string('commParish');
            $table->string('commPlace');
            $table->date('confirmDate')->default('0000-00-00');
            $table->string('confirmParish');
            $table->string('confirmPlace');
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
        Schema::drop('dependents');
    }
}
