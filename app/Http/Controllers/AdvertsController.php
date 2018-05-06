<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Advert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class AdvertsController extends Controller
{
    
    public function postCreateadvert(Request $request)
    {

    	$status = '1';
    	Advert::create([
            'user_id' => Auth::user()->id,
            'coverimage' => $request->coverimage->store('public/images/photo'),
            'company' => $request->company,
            'title' => $request->title,
            'description' => $request->description,
            'slug' => str_slug($request->title),
            'status' => $status,
            'section' => $request->section,
            'linkcategory' => $request->linkcategory,
            'link' => $request->link,
        ]);

        return redirect('/new/advert');
    }

     public function postEditadvert(Request $request)
    {

      $rules = array (
            'title' => 'required',
            'description' => 'required' 
    );

    $validator = Validator::make ( Input::all (), $rules );
    if ($validator->fails ())
        return Response::json ( array (             
                'errors' => $validator->getMessageBag ()->toArray () 
        ) );
    else {
        
        $data = Advert::find ( $request->id );
        $data->title = $request->title;
        $data->description = $request->description;
        $data->slug = str_slug($request->title);
        $data->company = $request->company;
        $data->section = $request->section;
        $data->linkcategory = $request->linkcategory;
        $data->link = $request->link;
        $data->save ();
        
      }
     return response ()->json ( $data );
    }


  public function postDeleteadvert(Request $request)
    {

      Advert::find ( $request->id )->delete();
       return response ()->json ();
   }

    // <div class="page-header header-filter" style="background-image: url('{{  Storage::url($advert->coverimage) }}');"> get without Storage in Model 
    
}

