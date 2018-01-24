<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    public function ratetypes(){
    	return $this->belongsTo('App\Ratetype');
    }
}
