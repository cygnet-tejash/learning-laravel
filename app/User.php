<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasRoles, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Function to check if the current user is admin or not
     *
     * @return boolean
     */
    public function isAdmin()
    {
        if ($this->role == 1) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Function to get profile image of user if exist
     * otherwise returning defult profile image.
     *
     * @return string
     */
    public function getProfileImage()
    {
        if ($this->image) {
            return '/images/users/'.$this->id.'/'.$this->image;
        } else {
            return '/img/default_profile_pic.png';
        }
    }
}
