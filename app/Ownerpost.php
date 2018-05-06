<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ownerpost extends Model
{
     protected $fillable = [
        'owner_id','post_id',
    ];
}
