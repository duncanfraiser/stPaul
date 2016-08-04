<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Catechumen extends Model
{
	 	use SoftDeletes;
        protected $fillable = [
            'firstName',
            'middleName',
            'lastName',
            'maidenName',
            'homePhone',
            'cellPhone',
            'dob',
            'occupation',
            'workPhone',
            'email',
            'baptized',
            'bapChurch',
            'bapDate',
            'practiced',
            'why',
            'dadFirstName',
            'dadMiddleName',
            'dadLastName',
            'momFirstName',
            'momMiddleName',
            'momLastName',
            'married',
            'firstMarriage',
            'married_location',
            'divorced',
            'annulment_granted',
            'annulment_pending',
            'spouse_baptized',
            'spouse_faith',
            'spouse_church',
            'spouse_church_address'
            ];
}
