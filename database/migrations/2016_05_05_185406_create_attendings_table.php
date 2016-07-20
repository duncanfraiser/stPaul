<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('time');
            $table->string('nameOne');
            $table->string('phoneOne');
            $table->string('nameTwo');
            $table->string('phoneTwo');
            $table->string('nameThree');
            $table->string('phoneThree');
            $table->string('nameFour');
            $table->string('phoneFour');
            $table->string('nameFive');
            $table->string('phoneFive');
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
        Schema::drop('attendings');
    }
}
