<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reflection extends Model
{
  use SoftDeletes;
  protected $fillable = [
                'title',
                'embed'
                ];
}
