<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use App\Post;
use App\Profile;
use App\Advert;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function getLogin()
    {
      return view('citizen.login');
    }

    public function getHome()
    {

      $avatar = User::where('email', 'rithoandrew@gmail.com')->value('avatar');
      
      if (Auth::check()){
        $user = Auth::user();
        $profile = Auth::user()->profile;
      } 
      
      $adverts = Advert::where('id', '!=', '1')->get();
      $homeadvert = Advert::where('id','1')->get();
      $posts = Post::orderBy('created_at', 'desc')->paginate(8);
      return view('homepage', compact('posts','avatar','user','profile','adverts','homeadvert'));
    }

    public function getRegisteruser()
    {

     // $count = User::count();
    	$count = 0;
     $count=$count+1;
     $count=sprintf('%09d',$count);
     $merge = 'usr'.$count;
     $user_id = $merge;
      return view('citizen.registeruser', ['user_id' => $user_id]);
    }

    public function getRegisterbusiness()
    {

     $count = Business::count();
     $count=$count+1;
     $count=sprintf('%09d',$count);
     $merge = 'biz'.$count;
     $business_id = $merge;
      return view('business.registerbusiness', ['business_id' => $agency]);
    }

    public function getRegistercompany()
    {

     $count = Company::count();
     $count=$count+1;
     $count=sprintf('%09d',$count);
     $merge = 'co'.$count;
     $company_id = $merge;
      return view('company.registercompany', ['company_id' => $agency]);
    }

    public function getUserprofile()
    {

     // $count = Company::count();
     // $count=$count+1;
     // $count=sprintf('%09d',$count);
     // $merge = 'co'.$count;
     // $company_id = $merge;
      return view('citizen.userprofile');
    }

    public function getEditUserprofile()
    {

     // $count = Company::count();
     // $count=$count+1;
     // $count=sprintf('%09d',$count);
     // $merge = 'co'.$count;
     // $company_id = $merge;
      return view('citizen.usereditprofile');
    }

    public function getUserhome()
    {

      $slug = Auth::user()->slug;
      $user = User::where('slug', $slug)->first();
      $profile = Auth::user()->profile;
      return view('citizen.home', compact('user', 'profile'));
    }

    public function getViewprofile()
    {

      $slug = Auth::user()->slug;
      $user = User::where('slug', $slug)->first();
      $profile = Auth::user()->profile;
      return view('citizen.viewprofile', compact('user', 'profile'));
    }

    public function getBusinessprofile()
    {

     // $count = Company::count();
     // $count=$count+1;
     // $count=sprintf('%09d',$count);
     // $merge = 'co'.$count;
     // $company_id = $merge;
      $slug = Auth::user()->slug;
      $user = User::where('slug', $slug)->first();
      $profile = Auth::user()->profile;
      return view('business.businessprofile' , compact('user', 'profile'));
    }

    public function getViewbusinessprofile()
    {

     // $count = Company::count();
     // $count=$count+1;
     // $count=sprintf('%09d',$count);
     // $merge = 'co'.$count;
     // $company_id = $merge;
      return view('business.viewbusinessprofile');
    }

    public function getCompanyprofile()
    {

     // $count = Company::count();
     // $count=$count+1;
     // $count=sprintf('%09d',$count);
     // $merge = 'co'.$count;
     // $company_id = $merge;
      return view('company.companyprofile');
    }

    public function getPricing()
    {

     // $count = Company::count();
     // $count=$count+1;
     // $count=sprintf('%09d',$count);
     // $merge = 'co'.$count;
     // $company_id = $merge;
      return view('pricing');
    }

    

    public function getResults()
    {

     // $count = Company::count();
     // $count=$count+1;
     // $count=sprintf('%09d',$count);
     // $merge = 'co'.$count;
     // $company_id = $merge;
      return view('results');
    }

    public function getUserresults()
    {

      $slug = Auth::user()->slug;
      $user = User::where('slug', $slug)->first();
      $profile = Auth::user()->profile;
      return view('citizen.results', compact('user', 'profile'));
    }
}
