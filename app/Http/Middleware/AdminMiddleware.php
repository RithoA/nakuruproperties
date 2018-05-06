<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user()->type != 'admin'){
             if (Auth::user()->status == '0'){
            Session::flash('verify', 'Check your email for an email verification link, if you have not recieved it yet, navigate to edit profile and request for one.');
        }
            return redirect('/my/home');
        }

        return $next($request);
    }
}
