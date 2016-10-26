<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use SoftDeletes;

	protected $fillable = [
            'first_name',
            'last_name',
            'email',
            'cell_phone',
            'current_group',
            'group_name',
            'date',
            'time',
            'contact',
            'participate_time',
            'participate_on',
            'group_type'
            ];
}
