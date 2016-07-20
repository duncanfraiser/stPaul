<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fileupload extends Model
{
	    protected $table = 'fileuploads';
    	use SoftDeletes;
      protected $fillable = [
   			'title',
            'path'
        ];
}
