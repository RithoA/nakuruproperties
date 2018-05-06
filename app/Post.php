<?php

namespace App;

use Auth;
use Storage;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Post extends Model
{
     // use Searchable;
     
	public $with = ['user','likes'];
    
    protected $fillable = ['user_id','coverimage','title','description','slug','body','status','town','location','longitude','latitude','type','price','commission','purchaselink','videolink'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function likes()
    {
        return $this->hasMany('App\Like');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment','post_id');
    }

    public function postphotos()
    {
        return $this->hasMany('App\Postphoto','post_id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag','post_tags');
    }

    public function owners()
    {
        return $this->belongsToMany('App\Owner','owner_posts');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category','category_posts');
    }

     public function getCoverimageAttribute($coverimage)
    {
        return asset(Storage::url($coverimage));
    }

    public function favorited()
{
    return (bool) Favorite::where('user_id', Auth::id())
                        ->where('post_id', $this->id)
                        ->first();
}

}
