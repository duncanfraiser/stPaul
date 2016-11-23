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
   			'altar_donor',
            'mother_title',
            'blessed_mother_donor',
            'altar_honor',
            'mother_honor',
            'extra',
            'altar_color',
            'mother_color',
            'blessed_mother_flower_honor_memory',
            'altar_flower_honor_memory',


        ];
}
