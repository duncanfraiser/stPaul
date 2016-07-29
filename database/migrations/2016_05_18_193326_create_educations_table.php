<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('father_first_name');
            $table->string('father_middle_name');
            $table->string('father_last_name');
            $table->string('father_dob');
            $table->string('mother_first_name');
            $table->string('mother_middle_name');
            $table->string('mother_last_name');
            $table->string('mother_dob');
            $table->string('marital_status');
            $table->string('reside_with');
            $table->string('address');
            $table->string('phone');
            $table->string('father_work');
            $table->string('father_cell');
            $table->string('father_email');
            $table->string('mother_work');
            $table->string('mother_cell');
            $table->string('mother_email');
            $table->string('contact_one_name');
            $table->string('contact_one_relation');
            $table->string('contact_one_phone');
            $table->string('contact_two_name');
            $table->string('contact_two_relation');
            $table->string('contact_two_phone');
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
       Schema::drop('educations');
    }
}

