<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Tag;
use App\User;
use App\Profile;
use Auth;
// use App\Http\Requests;
use Illuminate\Http\Request;
use Response;
use View;

class SearchController extends Controller
{
    public function filter(Request $request, Post $result)
    {
        $result = $result->newQuery();

// Search for a post based on their category.
if ($request->has('category')) {
    $result->whereHas('categories', function ($query) use ($request) {
        $query->where('categories.id', $request->input('category'));
    });
}

// Search for a post based on their town.
if ($request->has('town')) {
    $result->where('town', $request->input('town'));
    
}

// Search for a post based on their location.
if ($request->has('location')) {
    $result->where('location', $request->input('location'));
    
}

// if ($request->has('area')) {
//     $result->whereHas('areas', function ($query) use ($request) {
//         $query->whereIn('posts.area', $request->input('area'));
//     });
// }

// Search for a post based on their tag.
if ($request->has('tag')) {
    $result->whereHas('tags', function ($query) use ($request) {
        $query->whereIn('tags.id', $request->input('tag'));
    });
}



// search price between max and min
if ($request->has('max')) {
    $result->whereBetween('price', [$request->input('min'), $request->input('max')]);
    
}

// Get the results and return them.
      $results = $result->paginate(6);
      $avatar = User::where('email', 'rithoandrew@gmail.com')->value('avatar');
      if (Auth::check()){
      $user = Auth::user();
      $profile = Auth::user()->profile;
      if (Auth::user()->type == 'admin'){
           return view('admin.results', compact('user', 'profile','results','avatar'))->render();
        }
        else{
           return view('user.userresults', compact('user', 'profile','results','avatar'))->render();
        }
          }
       // return redirect()->back()->with(compact('user', 'profile','results','avatar'));
      // return response ()->json ( $results );
      // return Response::json(View::make('admin.results' , compact('user', 'profile','results','avatar'))->render());
      
        else{
          return view('results', compact('results','avatar'))->render();
        }
      
     
    }
}
