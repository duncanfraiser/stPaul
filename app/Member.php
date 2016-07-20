<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\Dependent;


class Member extends Model
{
        protected $fillable = [
            'todaysDate',
            'familyName',
            'tNameOne',
            'fNameOne',
            'mNameOne',
            'lNameOne',
            'perferedNameOne',
            'dobOne',
            'maritalStat',
            'address',
            'homePhone',
            'cellPhoneOne',
            'workPhoneOne',
            'emailOne',
            'careerOne',
            'employmentOne',
            'active',
            'ifNo',
            'tNameTwo',
            'fNameTwo',
            'mNameTwo',
            'lNameTwo',
            'perferedNameTwo',
            'dobTwo',
            'cellPhoneTwo',
            'workPhoneTwo',
            'emailTwo',
            'careerTwo',
            'employmentTwo',
            'okPhone',
            'okAddress',
            'okEmail'

   ];


       public function dependent(){
        return $this->hasMany('App\Dependent');
    }




}
