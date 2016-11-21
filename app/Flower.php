<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Flower extends Model
{
		use SoftDeletes;

      protected $fillable = [
   			'date',
   			'altar_title',
   			'altar_spons',
            'mother_title',
            'mother_spons',
            'altar_honor',
            'mother_honor',
            'extra',
            'altar_color',
            'mother_color'


        ];
}
