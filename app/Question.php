<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
   
   public function reponces(){
   	return $this->hasMany('App\Reponce');
   }

    public function user(){
   	return $this->belongsTo('App\User');
   }
}
