<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contemplative extends Model
{
	use SoftDeletes;

      protected $fillable = [
   			'title',
            'body'
        ];
}
