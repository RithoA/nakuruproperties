<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use Mail;
use App\Subscription;
use Auth;
use App\Mail\verifyEmail;
use App\Mail\promoEmail;
use App\Mail\sendMessage;
use App\Jobs\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Session;

class EmailsController extends Controller
{
    public function verifyEmail($email , $verifyToken)
        {
            $user = User::where(['email' =>$email , 'verifyToken' => $verifyToken])->first();
            if($user){
              User::where(['email' =>$email , 'verifyToken' => $verifyToken])->update(['status' =>'1' , 'verifyToken' => NULL]);
             return redirect('/login');
            }
            else{

              return redirect('/login');
            }
        }

         public function subscribeEmail($email)
    { 
        $subscription = Subscription::where(['email' =>$email])->first();
            if($subscription){
              Subscription::where(['email' =>$email])->update(['status' =>'1']);
               Session::flash('sentemail', 'You have subscribed to Nakuru Properties successfully.');
              return redirect('/edit/my/profile');
            }
            else{

               return redirect('/edit/my/profile');
            }
       
    }


        public function unsubscribeEmail($email)
        {
            $subscription = Subscription::where(['email' =>$email])->first();
            if($subscription){
              Subscription::where(['email' =>$email])->update(['status' =>'0']);
             return redirect('/login');
            }
            else{

              return redirect('/login');
            }
        }

        public function requestverifyEmail()
    { 
    	$thisUser = User::findorFail(Auth::user()->id);
        Mail::to($thisUser['email'])->send(new verifyEmail($thisUser));
        Session::flash('sentemail', 'Verification Email has been sent. Please check your email.');
        return redirect('/edit/my/profile');
    }

     public function postNewemail(Request $request)
    {

            $data = $request->all();
            $coverimage = $request->coverimage;
            $coverimage = $coverimage->store('public/images/emails');

        if($request->sendto == 'All'){
          
           $emails = Subscription::where('status','1')->pluck('email');
           foreach ($emails as $email) {

            $id = User::where('email' , $email)->value('id');
            $user = User::findorFail($id);
            Mail::to($email)->send(new promoEmail($user,$data,$coverimage));
            // $user = User::where('email' , $email)->value('username');

            // Mail::send('auth.promoEmail', [ 'user'=>$user, 'email'=>$email, 'greetings' => $greetings, 'content' => $content, 'coverimage' => $coverimage, 'pagelink' => $pagelink], function ($message) use ($email, $subject, $coverimage) 
            //  {

            // $message->from('nakuruproperties@gmail.com');
            // $message->to($email)
            //  ->subject($subject);

            //  });
             }
       }else{

            $email = $request->sendto;
            $id = User::where('email' , $email)->value('id');
            $user = User::findorFail($id);
            Mail::to($email)->send(new promoEmail($user,$data,$coverimage));

            // Mail::send('auth.promoEmail', [ 'user'=>$user, 'email'=>$email, 'greetings' => $greetings, 'content' => $content, 'coverimage' => $coverimage, 'pagelink' => $pagelink], function ($message) use ($email, $subject, $coverimage) 
            // {

            // $message->from('nakuruproperties@gmail.com');
            // $message->to($email)
            //  ->subject($subject)
            // ;

            // });
       }
        return redirect()->route('pr.newemail');
    }

    public function postSendMessage(Request $request)
    {

            $data = $request->all();
            // dispatch((new Message($data)));
            Mail::to('naksproperties@gmail.com')->send(new sendMessage($data));
            Session::flash('sentemail', 'Message sent to Nakuru Properties successfully.');

        return redirect()->route('pr.viewprofile');
    }

      public function postEditsubscriber(Request $request)
    {


      $rules = array (
            'email' => 'required' 
    );

    $validator = Validator::make ( Input::all (), $rules );
    if ($validator->fails ())
        return Response::json ( array (             
                'errors' => $validator->getMessageBag ()->toArray () 
        ) );
    else {
        
        $data = Subscription::find ( $request->id );
        $data->email = ($request->email);
        $data->status =  ($request->status);
        $data->save ();
        
      }
     return response ()->json ( $data );
    }


  public function postDeletesubscriber(Request $request)
    {

      Subscription::find ( $request->id )->delete();
       return response ()->json ();
     
    }
}


      // Mail::send('email.welcome', ['name' => $name], function ($message) use($data)
      //       {
      //           $message->to($data['email'], $data['name'])->subject('Welcome to Expertphp.in!');
            
      //       });