<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class FriendshipsController extends Controller
{
   public function check_following($id)
    {
        if(Auth::user()->is_following($id) === 1)
        {
            return [ "status" => "following" ];
        }

        if(Auth::user()->has_pending_follow_request_sent_to($id))
        {
            return [ "status" => "waiting" ];
        }

        return [ "status" => 0 ];
    }

    public function check_follower($id)
    {
        
        if(Auth::user()->is_follower($id) === 1)
        {
            
            if(Auth::user()->is_following($id) === 1)
             {

             return [ "status" => "friends" ];
       
             }

             if(Auth::user()->has_pending_follow_request_sent_to($id))
             {

            return [ "status" => "waiting" ];

             }

            return [ "status" => "follower" ];
        }

        
        if(Auth::user()->has_pending_follow_request_from($id))
        {

            return [ "status" => "pending" ];
        }

        return [ "status" => 0 ];
    }

    public function add_friend($id)
    {
        //sending notifications, emails, broadcasting.
       $resp = Auth::user()->add_friend($id);

       // User::find($id)->notify(new \App\Notifications\NewFriendRequest(Auth::user()) );

       if(Auth::user()->is_following($id) === 1)
        {
            return [ "status" => "following" ];
        }

        if(Auth::user()->has_pending_follow_request_sent_to($id))
        {
            return [ "status" => "waiting" ];
        }

        return [ "status" => 0 ];
    }

    public function accept_friend($id)
    {
        //sending nots
        $resp =  Auth::user()->accept_friend($id);

        // User::find($id)->notify(new \App\Notifications\FriendRequestAccepted(Auth::user()) );
        if(Auth::user()->is_follower($id) === 1)
        {
            
            if(Auth::user()->is_following($id) === 1)
             {

             return [ "status" => "friends" ];
       
             }

             if(Auth::user()->has_pending_follow_request_sent_to($id))
             {

            return [ "status" => "waiting" ];

             }

            return [ "status" => "follower" ];
        }

        return [ "status" => 0 ];
    }
}
