<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bulletin extends Model
{
	use SoftDeletes;

      protected $fillable = [
   			'title',
   			'excerpt',
            'body'
        ];
}
