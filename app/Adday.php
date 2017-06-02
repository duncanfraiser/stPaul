<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Adday extends Model
{
	protected $table = 'addays';
      use SoftDeletes;
	protected $fillable = [
            'day',
            'time'
            ];



      public function adds(){
        return $this->hasMany('App\Adoration');
      }

}