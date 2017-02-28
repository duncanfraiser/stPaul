<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Homily extends Model
{
	use SoftDeletes;

      protected $fillable = [
   			'excerpt',
   			'title',
            'body',
            'filepath'
        ];
}
