<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChristLife extends Model
{
	protected $table = 'christlife';
      use SoftDeletes;
	protected $fillable = [
            'day',
            'completed',
            'firstName',
            'middleName',
            'lastName',
            'age',
            'gender',
            'phone',
            'text',
            'email',
            'street',
            'city',
            'state',
            'zip',
            'childcare',
            'childage',
            'ride',
            'provideride',
            'allergies',
            'comments'
            ];
}
