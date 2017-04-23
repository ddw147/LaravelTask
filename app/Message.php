<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //

    protected $fillable = ['from_user_id','to_user_id','title','message'];



    public function from_user()
    {
    	return $this->belongsTo('App\User','from_user_id','id');
    }

	public function to_user()
    {
    	return $this->belongsTo('App\User','to_user_id','id');
    }

}
