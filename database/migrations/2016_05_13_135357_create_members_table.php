<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->date('todaysDate');
            $table->string('familyName');
            $table->string('tNameOne');
            $table->string('fNameOne');
            $table->string('mNameOne');
            $table->string('lNameOne');
            $table->string('perferedNameOne');
            $table->date('dobOne')->default('0000-00-00');
            $table->string('maritalStat');
            $table->string('address');
            $table->string('homePhone');
            $table->string('cellPhoneOne');
            $table->string('workPhoneOne');
            $table->string('emailOne');
            $table->string('careerOne');
            $table->string('employmentOne');

            $table->string('active');
            $table->string('ifNo');
            $table->string('tNameTwo');
            $table->string('fNameTwo');
            $table->string('mNameTwo');
            $table->string('lNameTwo');
            $table->string('perferedNameTwo');
            $table->date('dobTwo')->default('0000-00-00');
            $table->string('cellPhoneTwo');
            $table->string('workPhoneTwo');
            $table->string('emailTwo');
            $table->string('careerTwo');
            $table->string('employmentTwo');
            $table->string('okPhone');
            $table->string('okAddress');
            $table->string('okEmail');

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
        Schema::drop('members');
    }
}
