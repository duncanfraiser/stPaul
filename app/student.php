<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Education;

class student extends Model
{
            use SoftDeletes;
	      protected $fillable = [
            'education_id',
            'firstName',
            'middleName',
            'lastName',
            'dob',
            'age',
            'grade',
            'school',
            'Date_of_Baptism',
            'Baptism_Church',
            'Church_Address',
            'Communion',
            'Communion_Church',
            'Confirmation',
            'Confirmation_Church',
            'email',
            'cell',
            'needs'
            ];

      public function education(){
            return $this->belongsTo('App\Education');
      }

}
