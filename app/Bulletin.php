<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bulletin extends Model
{
	use SoftDeletes;

      protected $fillable = [
   			'heading',
   			'title',
   			'excerpt',
            'body'
        ];
}
