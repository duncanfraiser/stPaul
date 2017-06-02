<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Adoration extends Model
{
	protected $table = 'adorations';
      use SoftDeletes;
	protected $fillable = [
            'one',
            ];

                  public function day(){
      return $this->belongsTo('App\Adday');
      }
}

