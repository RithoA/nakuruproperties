<?php

namespace App;
use Storage;
use Illuminate\Database\Eloquent\Model;


class Advert extends Model
{
    protected $fillable = ['user_id','coverimage','company','title','description','slug','status','section','linkcategory','link'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    
  public function getCoverimageAttribute($coverimage)
    {
        return asset(Storage::url($coverimage));
    }

}
