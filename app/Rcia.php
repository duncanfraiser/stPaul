<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rcia extends Model
{
    protected $table = 'rcias';
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
