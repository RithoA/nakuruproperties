<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Promo;

class PromosController extends Controller
{
    public function postCreatepromo(Request $request)
    {

    	$status = '1';
    	Promo::create([
            'user_id' => Auth::user()->id,
            'coverimage' => $request->coverimage->store('public/images/promo'),
            'title' => $request->title,
            'description' => $request->description,
            'slug' => str_slug($request->title),
            'file' => $request->file->store('public/files/promo'),
            'status' => $status,
            'category' => $request->category,
            'setpurchase' => $request->setpurchase,
            'purchaselink' => $request->purchaselink,
            'videolink' => $request->videolink,
            'downloadlink' => $request->downloadlink,
        ]);

        return redirect('/new/promo');
    }
}
