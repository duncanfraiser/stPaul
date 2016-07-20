<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Welcome extends Model
{
	use SoftDeletes;

      protected $fillable = [
   			'title',
            'body'
        ];
}
