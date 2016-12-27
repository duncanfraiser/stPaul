<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\Dependent;


class Member extends Model
{
        protected $fillable = [
            'todaysDate',
            'prevParish',
            'familyName',
            'tNameOne',
            'fNameOne',
            'mNameOne',
            'lNameOne',
            'perferedNameOne',
            'dobOne',
            'maritalStat',
            'address',
            'city',
            'state',
            'zip',
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
            'contact',
            'okPhone',
            'okAddress',
            'okEmail'
            'stewardship'

   ];


       public function dependent(){
        return $this->hasMany('App\Dependent');
    }




}
