<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Http\Requests\MessageRequest;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inbox()
    {
         $view='inbox';     
         $messages = Auth::user()->in_messages()->orderBy('id','desc')->paginate(10);   

         return view('message.inbox',compact(['messages','view']));
    }


    public function sent()
    {
         $view= 'sent';  
         $messages = Auth::user()->sent_messages()->orderBy('id','desc')->paginate(10);   

         return view('message.sent',compact(['messages','view']));
    }


    public function all()
    {
         $view= 'all';  
         $messages =Message::orderBy('id','desc')->paginate(10);   
         return view('message.all',compact(['messages','view']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = User::orderBy('name')->pluck('name','id');

        return view('message.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MessageRequest $request)
    {
        //
        $user_id=$request->input('user_id');
        $title=$request->input('title');
        $message=$request->input('message');

        Auth::user()->send_message($user_id,$title,$message);

        return redirect('/message/sent')->with('status','Message sent successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()->back()->with('status','message delete successfully');
    }
}
