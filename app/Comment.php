<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	public $with = ['user'];

    protected $fillable = ['comment','published','user_id','post_id'];

    protected $dates = ['created_at'];

    protected $appends = ['date'];

    public function getDateAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    public function post()
    {
        return $this->belongsTo('App\Post');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
