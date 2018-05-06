<?php

namespace App\Http\Controllers;


use Auth;
use App\User;
use App\Post;
use Illuminate\Http\Request;

class FeedsController extends Controller
{
    public function feed()
    {
        $friends = Auth::user()->following();

        $feed = array();

        foreach($friends as $friend):
                foreach($friend->posts as $post):
                    array_push($feed, $post);
                endforeach;
        endforeach;

        foreach(Auth::user()->posts as $post):
            array_push($feed, $post);
        endforeach;

        usort($feed, function($p1, $p2){
            return $p1->id < $p2->id;
        });

        return $feed;
    }

    public function myfeed()
    {

        $feed = array();

        foreach(Auth::user()->posts as $post):
            array_push($feed, $post);
        endforeach;

        usort($feed, function($p1, $p2){
            return $p1->id < $p2->id;
        });

        return $feed;
    }


    public function getRecent($id)
{
    $recent = Post::where('id','!=', $id)
                   ->orderBy('created_at', 'desc')->take(2)
                   ->get();
    return $recent;
}

    public function getPrime($id)
{
     $prime = Post::where('id','!=', $id)
                   ->where('type','Prime')
                   ->orderByRaw('RAND()')->take(2)
                   ->get();
    return $prime;
}


    public function getSuggestion($id)
{
     $suggestion = Post::where('id','!=', $id)
                   ->orderBy('created_at', 'desc')->take(2)
                   ->get();
    return $suggestion;
}



}
