<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Businessfriendship extends Model
{
     protected $fillable = [
        'requester','business_requested','status',
    ];
}
