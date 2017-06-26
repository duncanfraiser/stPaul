<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class studentUpdate extends Model

{
		protected $table = 'studentUpdates';
          use SoftDeletes;
	      protected $fillable = [
            'name',
            'father',
            'mother',
            'info'
            ];
}
