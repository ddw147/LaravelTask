<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Support\Facades\Log;


use Carbon\Carbon;
use App\Message;

class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'mobile'
    ];

     


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function block()
    {
        $this->is_blocked=true;
        $this->save();
    }

    public function unblock()
    {
        $this->is_blocked=false;
        $this->save();
    }

    
    public function in_messages()
     {
         return $this->hasMany('App\Message','to_user_id','id');
     }

     public function sent_messages()
     {
         return $this->hasMany('App\Message','from_user_id','id');
     } 

   
     public function send_message($user_id,$title,$message='')
     {
            Log::info($message);

            $message = new Message(['title'=>$title , 'message'=>$message , 'to_user_id'=>$user_id ]);
            $this->sent_messages()->save($message); 
     }  
 

}
