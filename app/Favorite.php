<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $fillable = ['user_id','post_id'];

    public function posts()
    {
        return $this->belongsTo('App\Post');
    }
}
