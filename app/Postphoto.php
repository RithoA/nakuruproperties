<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Storage;

class Postphoto extends Model
{
    protected $fillable = ['photo'];

    public function posts()
    {
        return $this->belongsTo('App\Post')
        ->orderBy('created_at');
    }

      public function getPhotoAttribute($photo)
    {
        return asset(Storage::url($photo));
    }
}
