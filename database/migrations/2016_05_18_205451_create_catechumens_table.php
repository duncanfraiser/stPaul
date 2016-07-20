<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatechumensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catechumens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->string('maidenName');
            $table->string('homePhone');
            $table->string('cellPhone');
            $table->date('dob')->default('0000-00-00');
            $table->string('occupation');
            $table->string('workPhone');
            $table->string('email');
            $table->string('baptized');
            $table->string('bapChurch');
            $table->date('bapDate')->default('0000-00-00');
            $table->string('practiced');
            $table->string('why');
            $table->string('dadFirstName');
            $table->string('dadMiddleName');
            $table->string('dadLastName');
            $table->string('momFirstName');
            $table->string('momMiddleName');
            $table->string('momLastName');
            $table->string('married');
            $table->string('firstMarriage');
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
       Schema::drop('catechumens');
    }
}
