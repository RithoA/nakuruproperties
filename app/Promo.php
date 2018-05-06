<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
   protected $fillable = ['user_id','coverimage','title','description','slug','file','status','category','setpurchase','purchaselink','videolink','downloadlink'];
}
