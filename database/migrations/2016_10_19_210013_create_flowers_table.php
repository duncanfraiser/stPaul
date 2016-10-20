<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flowers', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('title');
            $table->string('alter');
            $table->string('mother');
            $table->date('start_date');
            $table->dateTime('start_time');
            $table->date('end_date');
            $table->dateTime('end_time');
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
        Schema::drop('flowers');
    }
}
