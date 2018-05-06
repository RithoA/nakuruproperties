<?php

namespace App;

use Storage;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Friendable;

class Business extends Model
{
    use Friendable;

     protected $fillable = [
        'user_id',
        'businessname',
        'slug',
        'category',
        'subcategory',
        'description',
        'coverimage',
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }//

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function getCoverimageAttribute($coverimage)
    {
        return asset(Storage::url($coverimage));
    }
}
