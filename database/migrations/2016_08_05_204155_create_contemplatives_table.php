<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContemplativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('contemplatives', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('body');
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
            Schema::drop('contemplatives');
    }
}
