<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function companies(){
    	return $this->belongsTo('App\Company');
    }

    public function role(){
    	return $this->belongsTo('App\Role');
    }
}
