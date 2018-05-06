<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use App\Category;
use App\Subscription;
use App\Tag;
use App\Post;
use App\Owner;
use App\Advert;
use App\Town;
use App\Location;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Response;
// use Illuminate\Support\Facades\Storage;

class ProfilesController extends Controller 
{
  //////////////////////////////////////////////////////////////////VIEWS WITHIN OPEN PROFILE/////////////////////////////////////////////////
    public function getUserprofile()
    {
      $user = Auth::user();
      $id = User::where('email', 'rithoandrew@gmail.com')->value('id');
      $word = Profile::where('user_id', $id )->value('about');
      $avatar = User::where('email', 'rithoandrew@gmail.com')->value('avatar');
      $listprime = Post::where('type','Prime')->orderByRaw('RAND()')->take(4)->get();
      $profile = Auth::user()->profile;
      return view('user.userprofile', compact('user', 'profile','listprime','avatar','word'));
     
    }

    public function getAdminprofile()
    {

      $user = Auth::user();
      $id = User::where('email', 'rithoandrew@gmail.com')->value('id');
      $word = Profile::where('user_id', $id )->value('about');
      $avatar = User::where('email', 'rithoandrew@gmail.com')->value('avatar');
      $listprime = Post::where('type','Prime')->orderByRaw('RAND()')->take(4)->get();
      $profile = Auth::user()->profile;
      return view('admin.profile', compact('user', 'profile','listprime','avatar','word'));
     
    }

    public function getUserhome()
    {

      $avatar = User::where('email', 'rithoandrew@gmail.com')->value('avatar');
      $user = Auth::user();
      $profile = Auth::user()->profile;
      $adverts = Advert::where('id', '!=', '1')->get();
      $homeadvert = Advert::where('id','1')->get();
      $posts = Post::orderBy('created_at', 'desc')->paginate(9);
      return view('user.userhome', compact('user', 'profile','avatar','posts','adverts','homeadvert'));
    }

    public function getAdminhome()
    {

      $avatar = User::where('email', 'rithoandrew@gmail.com')->value('avatar');
      $user = Auth::user();
      $profile = Auth::user()->profile;
      $adverts = Advert::where('id', '!=', '1')->get();
      $homeadvert = Advert::where('id','1')->get();
      $posts = Post::orderBy('created_at', 'desc')->paginate(9);
      return view('admin.home', compact('user', 'profile','avatar','posts','adverts','homeadvert'));
    }

    public function getEditUserprofile()
    {
      $user = Auth::user();
      $profile = Auth::user()->profile;
      $subscription = Subscription::where('email', Auth::user()->email)->value('status');
      return view('user.edituserprofile', compact('user', 'profile','subscription'));
    }

    public function getEditAdminprofile()
    {
      $user = Auth::user();
      $profile = Auth::user()->profile;
      return view('admin.editprofile', compact('user', 'profile'));
    }

    public function getViewprofile()
    {
      $bizuser = User::where('email', 'rithoandrew@gmail.com')->first();
      $bizprofile = Profile::where('user_id', '1')->first();
      if (Auth::check()){
      $user = Auth::user();
      $profile = Auth::user()->profile;
      if (Auth::user()->type == 'admin'){
           return view('admin.viewprofile', compact('user', 'profile','bizuser','bizprofile'));
        }
        else{
           return view('user.viewprofile', compact('user', 'profile','bizuser','bizprofile'));
        }
          }
        else{
          return view('viewprofile', compact('bizuser','bizprofile'));
        }
    }

    public function getListusers()
    {

      $slug = Auth::user()->slug;
      $user = User::where('slug', $slug)->first();
      $profile = Auth::user()->profile;
      $listusers= User::where('id', '!=', Auth::id())->get();
      return view('admin.listusers', compact('user', 'profile','listusers'));
    }

    public function getListfollowers()
    {

      $slug = Auth::user()->slug;
      $user = User::where('slug', $slug)->first();
      $profile = Auth::user()->profile;
      $listfollowers = Auth::user()->followers();
      $follow_requests = Auth::user()->pending_follow_requests();
      return view('admin.listfollowers', compact('user', 'profile','listfollowers', 'follow_requests'));
    }

    public function getListfollowing()
    {

      $slug = Auth::user()->slug;
      $user = User::where('slug', $slug)->first();
      $profile = Auth::user()->profile;
      $listfollowing = Auth::user()->following();
      return view('admin.listfollowing', compact('user', 'profile','listfollowing'));
    }

    public function getListposts()
    {
      $avatar = User::where('email', 'rithoandrew@gmail.com')->value('avatar');
      $user = Auth::user();
      $profile = Auth::user()->profile;
      $listposts = Post::all();
      return view('admin.listposts', compact('user', 'profile','listposts','avatar'));
    }

    public function getNewpost()
    {

      $owners = Owner::all();
      $categories = Category::all();
      $locations = Location::all();
      $towns = Town::all();
      $tags = Tag::all();
      $slug = Auth::user()->slug;
      $user = User::where('slug', $slug)->first();
      $profile = Auth::user()->profile;
      return view('admin.newpost', compact('user', 'profile','owners','categories','tags','locations','towns'));
    }

    public function getNewemail()
    {
      $user = Auth::user();
      $usersto = Subscription::where('status', '1')->get();
      $profile = Auth::user()->profile;
      return view('admin.newemail', compact('user', 'profile','usersto'));
    }

    public function getNewcategory()
    {

      $slug = Auth::user()->slug;
      $user = User::where('slug', $slug)->first();
      $towns = Town::all();
      $profile = Auth::user()->profile;
      return view('admin.newclassification', compact('user', 'profile','towns'));
    }

     public function getListcategories()
    {

      $user = Auth::user();
      $profile = Auth::user()->profile;
      $listcategories= Category::get();
      return view('admin.listcategories', compact('user', 'profile','listcategories'));
    }

     public function getListlocations()
    {

      $user = Auth::user();
      $profile = Auth::user()->profile;
      $towns = Town::all();
      $listlocations= Location::get();
      return view('admin.listlocations', compact('user', 'profile','listlocations','towns'));
    }

    public function getListTowns()
    {

      $user = Auth::user();
      $profile = Auth::user()->profile;
      $listtowns= Town::get();
      return view('admin.listtowns', compact('user', 'profile','listtowns'));
    }

    public function getListtags()
    {
      $user = Auth::user();
      $profile = Auth::user()->profile;
      $listtags= Tag::get();
      return view('admin.listtags', compact('user', 'profile','listtags'));
    }

    public function getListowners()
    {
      $user = Auth::user();
      $profile = Auth::user()->profile;
      $listowners= Owner::get();
      return view('admin.listowners', compact('user', 'profile','listowners'));
    }

     public function getListSubscribers()
    {

      $user = Auth::user();
      $profile = Auth::user()->profile;
      $listsubscribers= Subscription::get();
      return view('admin.listsubscribers', compact('user', 'profile','listsubscribers'));
    }


    public function getNewpromo()
    {

      $slug = Auth::user()->slug;
      $user = User::where('slug', $slug)->first();
      $profile = Auth::user()->profile;
      return view('admin.newpromo', compact('user', 'profile'));
    }

    public function getNewadvert()
    {

      $slug = Auth::user()->slug;
      $user = User::where('slug', $slug)->first();
      $profile = Auth::user()->profile;
      return view('admin.newadvert', compact('user', 'profile'));
    }

    public function getListadverts()
    {
      $avatar = User::where('email', 'rithoandrew@gmail.com')->value('avatar');
      $user = Auth::user();
      $profile = Auth::user()->profile;
      $listadverts= Advert::all();
      return view('admin.listadverts', compact('user', 'profile','listadverts','avatar'));
    }


    public function getNewuser()
    {

      $slug = Auth::user()->slug;
      $user = User::where('slug', $slug)->first();
      $profile = Auth::user()->profile;
      return view('admin.newuser', compact('user', 'profile'));
    }


    public function getUpgrade()
    {

      $slug = Auth::user()->slug;
      $user = User::where('slug', $slug)->first();
      $profile = Auth::user()->profile;
      return view('auth.upgrade', compact('user', 'profile'));
    }
    /////////////////////////////////////////////////////////USER PROFILE RELATED FUNCTIONS//////////////////////////////////////////////////

     public function postProfile(Request $request)
    {

        if(is_null($request->gender)){

          $gender= Auth::user()->gender;

        }else{

          $gender= $request->gender;
        }

        if(is_null($request->about)){

          $about= Auth::user()->profile->about;

        }else{

          $about= $request->about;
        }
        
        $profile = Profile::find (Auth::user()->id);
        $profile->phone = $request->phone;
        $profile->location = $request->location;
        $profile->about = $about;
        $profile->save ();

        $user = User::find (Auth::user()->id);
        $user->gender = $gender;
        $user->save ();

        if ($request->user()->type == 'admin')
        {
            return redirect('/edit/admin/profile');
          }
        else{

          return redirect('/edit/my/profile');
        }
    }

    public function postAvatar(Request $request)
    {
      if($request->hasFile('avatar'))
      {
        Auth::user()->update([
          'avatar' => $request->avatar->store('public/images/avatar')
          ]);
      }

     return redirect()->route('pr.edituserprofile');
    }

    public function postCoverimage(Request $request)
    {
      if($request->hasFile('coverimage'))
      {
        Auth::user()->profile->update([
          'coverimage' => $request->coverimage->store('public/images/coverimage')
          ]);
      }

      return redirect()->route('pr.edituserprofile');
    }

    public function getUserfavorites()
{
      $myFavorites = Auth::user()->favorites;
      $avatar = User::where('email', 'rithoandrew@gmail.com')->value('avatar');
      $user = Auth::user();
      $profile = Auth::user()->profile;
    return view('user.userfavorites', compact('myFavorites','user','profile','avatar'));
}

 public function getAdminfavorites()
{
      $myFavorites = Auth::user()->favorites;
      $avatar = User::where('email', 'rithoandrew@gmail.com')->value('avatar');
      $user = Auth::user();
      $profile = Auth::user()->profile;
    return view('admin.favorites', compact('myFavorites','user','profile','avatar'));
}

}
