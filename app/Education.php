<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Education extends Model
{
    protected $table = 'educations';
    use SoftDeletes;
	protected $fillable = [
            'paid',
            'paidType',
            'paidAmount',
            'father_first_name',
            'father_middle_name',
            'father_last_name',
            'father_dob',
            'mother_first_name',
            'mother_middle_name',
           'mother_last_name',
            'mother_dob',
            'marital_status',
            'reside_with',
            'address',
            'phone',
            'father_work',
            'father_cell',
            'father_email',
            'mother_work',
            'mother_cell',
            'mother_email',
            'contact_one_name',
            'contact_one_relation',
            'contact_one_phone',
            'contact_two_name',
            'contact_two_relation',
            'contact_two_phone'
            ];


    public function student(){
        return $this->hasMany('App\Student');
    }


}
