<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   //Asociation with user.
   public function user(){
      return $this->belongsTo('App\User');
   }
}
