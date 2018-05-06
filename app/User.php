<?php

namespace App;

use Storage;
use App\Traits\Friendable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
 
    use HasApiTokens, Notifiable;
    use Friendable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug', 'avatar','username','email','gender','type','verifyToken','status','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profile()
    {
        return $this->hasOne('App\Profile');
    }

    public function advert()
    {
        return $this->hasMany('App\Advert');
    }

    public function business()
    {
        return $this->hasMany('App\Business');
    }

    public function posts()
    {
        return $this->hasMany('App\Post')
        ->orderBy('created_at');
    }

    public function favorites()
{
    return $this->belongsToMany('App\Post', 'favorites', 'user_id', 'post_id')->orderBy('created_at', 'desc')->withTimeStamps();
}

    public function getAvatarAttribute($avatar)
    {
        return asset(Storage::url($avatar));
    }
}
