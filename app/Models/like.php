<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class like extends Model
{   
    protected $table='luot_thich';

    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function bangtin(){
    	return $this->belongsTo('App\Models\bangtin');
    }
}
