<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Suggested_Prayer extends Model
{
	use SoftDeletes;
	    protected $table = 'suggested_prayers';

      protected $fillable = [
   			'title',
            'body'
        ];
}
