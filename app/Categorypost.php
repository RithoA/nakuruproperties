<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorypost extends Model
{
    protected $fillable = [
        'category_id','post_id',
    ];
}
