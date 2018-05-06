<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Profile;
use App\Subscription;
use Mail;
use App\Mail\verifyEmail;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin/home';

    // href="deleducation/'.Crypt::encrypt($education->education_id).'" 

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|string|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'gender' => 'required|bool',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $type = 'client';
        if($data['gender']){

            $avatar = 'public/images/defaults/male.png';
        }
        else{

            $avatar = 'public/images/defaults/female.png';
        }

        $user = User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'slug' => str_slug($data['email']),
            'avatar' => $avatar,
            'gender' => $data['gender'],
            'type' => $type,
            'verifyToken' => Str::random(40),
            'password' => bcrypt($data['password']),
        ]);

        $coverimage = 'public/images/defaults/bg7.jpg';
         Profile::create([
            'user_id' => $user->id,
            'coverimage' => $coverimage,
            ]);


         Subscription::create([
            'usernamme' => $user->username,
            'email' => $user->email,
            ]);

        
        $thisUser = User::findorFail($user->id);
        $this->sendverifyEmail($thisUser);

        return $user;
    }

        public function sendverifyEmail($thisUser)
        {
            Mail::to($thisUser['email'])->send(new verifyEmail($thisUser));
        }

        
}
