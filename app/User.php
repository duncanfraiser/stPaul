<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'christlife', 'rcia', 'education'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

     

    public function isAdmin(){
        if (\Auth::user()->role_id == 1) {
            return true;
        }
    }
    public function isChristlife(){
        if (\Auth::user()->christlife == 1) {
            return true;
        }
    }

    public function isEducation(){
        if (\Auth::user()->education == 1) {
            return true;
        }
    }

        public function isRcia(){
        if (\Auth::user()->rcia == 1) {
            return true;
        }
    }

    public function isPrayer(){
        if (\Auth::user()->prayer == 1) {
            return true;
        }
    }

    public function isBulletin(){
        if (\Auth::user()->bulletin == 1) {
            return true;
        }
    }

    public function isYouth(){
        if (\Auth::user()->youth == 1) {
            return true;
        }
    }

        public function isVolunteer(){
        if (\Auth::user()->volunteer == 1) {
            return true;
        }
    }


}
