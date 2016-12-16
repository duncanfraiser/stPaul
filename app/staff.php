<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class staff extends Model
{
		use SoftDeletes;

      protected $fillable = [
   			'img_path',
   			'name',
   			'email',
            'phone',
            'body'
        ];

}