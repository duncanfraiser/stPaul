<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Education extends Model
{
    protected $table = 'educations';
    use SoftDeletes;
	protected $fillable = [
   	      'firstName',
            'middleName',
            'lastName',
            'phone',
            'email',
            'dob',
            'street',
            'city',
            'state',
            'zip'
            ];
}
