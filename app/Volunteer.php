<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Volunteer extends Model
{
    use SoftDeletes;

	protected $fillable = [
             'first_name',
            'last_name',
            'age',
            'gender',
            'phone',
            'text',
            'email',
            'street',
            'city',
            'state',
            'zip',
            'explanation'
            ];
}
