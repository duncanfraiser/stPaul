<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChristlifeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('christlife', function (Blueprint $table) {
            $table->increments('id');
            $table->string('day');
            $table->string('completed');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->string('age');
            $table->string('gender');
            $table->string('phone');
            $table->string('text');
            $table->string('email');
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('childcare');
            $table->string('childage');
            $table->string('ride');
            $table->string('provideride');
            $table->string('allergies');
            $table->string('comments');
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
        Schema::drop('christlife');
    }
}
