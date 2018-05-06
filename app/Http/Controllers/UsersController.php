<?php

namespace App\Http\Controllers;
use App\User;
use App\Profile;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function postCreateuser(Request $request)
    {

    	// Validator::make($request, [
     //        'email' => 'required|string|email|max:255|unique:users',
     //        'gender' => 'required|bool',
     //        'type' => 'required',
     //        'password' => 'required|string|min:6|confirmed',
     //    ]);
    $rules = array(

             'email' => 'required|string|email|max:255|unique:users',
             'gender' => 'required|bool',
             'type' => 'required',
             'password' => 'required|string|min:6|confirmed',

        );

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            $messages = $validator->messages();

            $slug = Auth::user()->slug;
    		$user = User::where('slug', $slug)->first();
     		$profile = Auth::user()->profile;

            return view('admin.newuser')->withErrors($validator)->with('user',$user)->with('profile',$profile);
        }
        else{

    	 $type = 'client';
        if($request['gender']){

            $avatar = 'public/images/defaults/avatars/male.png';
        }
        else{

            $avatar = 'public/images/defaults/avatars/female.png';
        }

        User::create([
            'email' => $request->email,
            'slug' => str_slug($request['email']),
            'avatar' => $avatar,
            'gender' => $request->gender,
            'type' => $request->type,
            'password' => bcrypt($request['password']),
        ]);

        return redirect('/users');
    }

  }

  public function postEdituser(Request $request)
    {

      $rules = array (
            'email' => 'required|email',
            'gender' => 'required',
            'type' => 'required' 
    );

    $validator = Validator::make ( Input::all (), $rules );
    if ($validator->fails ())
        return Response::json ( array (             
                'errors' => $validator->getMessageBag ()->toArray () 
        ) );
    else {
        
        $data = User::find ( $request->id );
        $data->email = ($request->email);
        $data->slug =  str_slug($request->email);
        $data->gender = ($request->gender);
        $data->type = ($request->type);
        $data->save ();

        // if($request['gender']){

        //     $data->gender = 'Male';
        // }
        // else{

        //     $data->gender = 'Female';
        // }
        
      }
     return response ()->json ( $data );
    }


  public function postDeleteuser(Request $request)
    {

      User::find ( $request->id )->delete();
       return response ()->json ();
     
    }


    public function resetPassword(Request $request)
    {

      $this->validate($request, [
            'password' => 'required|confirmed|min:6',
        ]);

        Auth::user()->forceFill([
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ])->save();

        Session::flash('sentemail', 'Password reset successfull.');
        return redirect('/edit/my/profile');
     
    }

}
