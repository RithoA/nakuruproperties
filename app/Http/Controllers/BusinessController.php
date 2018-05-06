<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use Auth;
use App\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
   public function postRegisterbusiness(Request $request)
    {

        $this->validate($request, [
            'businessname' => 'required',
            'category' => 'required',
            'subcategory' => 'required',
        ]);
        $coverimage = 'public/images/defaults/coverimage/bg7.jpg';
        Business::create([
        	'user_id' => Auth::id(),
            'businessname' => $request->businessname,
            'slug' => str_slug($request->businessname),
            'category' => $request->category,
            'subcategory' => $request->subcategory,
            'coverimage' => $coverimage,
        ]);
        return redirect()->route('pr.userprofile');
    }

    public function viewmybusiness(Business $mybusiness)
    {

        $user = Auth::user();
        // $mybusiness = Business::where('slug', $business)->first();
        if ($user->type == 'premium'){
        session(['type'=>'rose']);
        }
        elseif($user->type == 'business')
        {
          session(['type'=>'blue']);
        }
        else{session (['type'=>'purple']); }

        $profile = Auth::user()->profile;
        return view('business.businessprofile', [
            'mybusiness' => $mybusiness,
            'user' => $user,
            'profile' => $profile,
            // 'videos' => $business->videos()->visible()->latestFirst()->paginate(5),
        ]);
    }
}

     
