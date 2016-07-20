<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rcias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->string('phone');
            $table->string('email');
            $table->date('dob')->default('0000-00-00');
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
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
       Schema::drop('rcias');
    }
}
