<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    
      protected $fillable = [
        'user_id','coverimage','job','about','country','bizlatitude','bizlongitude','homelatitude','homelongitude','facebook','twitter','instagram','snapchat','linkedin','pinterest','google','youtube','github','dribble','repost',
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
