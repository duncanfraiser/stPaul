<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
//commint to update git
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