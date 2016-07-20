<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Member;

class Dependent extends Model
{
        protected $fillable = [
            'member_id',
            'firstName',
            'middleName',
			'lastName',
            'sex',
            'perferedName',
            'cellPhone',
            'email',
            'school',
            'grade',
            'active',
            'ifNo',
            'bapDate',
            'bapParish',
            'bapPlace',
            'recDate',
            'recParish',
            'recPlace',
            'commDate',
            'commParish',
            'commPlace',
            'confirmDate',
            'confirmParish',
            'confirmPlace'
               ];


       public function location(){
        return $this->belongsTo('App\Member');
    }

}
