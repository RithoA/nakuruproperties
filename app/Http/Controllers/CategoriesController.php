<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subscription;
use App\Location;
use App\Town;
use App\Tag;
use App\Owner;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class CategoriesController extends Controller 
{

    //////////////////////////////////////////////////////////////////////////Categories
    public function postCreatecategory(Request $request)
    {
        
        Category::create([
            'name' => $request->category,
            'slug' => str_slug($request->category),
        ]);

        return redirect('/new/category');
    }

     public function postEditcategory(Request $request)
    {


      $rules = array (
            'name' => 'required' 
    );

    $validator = Validator::make ( Input::all (), $rules );
    if ($validator->fails ())
        return Response::json ( array (             
                'errors' => $validator->getMessageBag ()->toArray () 
        ) );
    else {
        
        $data = Category::find ( $request->id );
        $data->name = ($request->name);
        $data->slug =  str_slug($request->name);
        $data->save ();
        
      }
     return response ()->json ( $data );
    }


  public function postDeletecategory(Request $request)
    {

      Category::find ( $request->id )->delete();
       return response ()->json ();
     
    }

    public function getCategories()
    {
        $categories = Category::get();

        // return response($categories, 200);
        return response ()->json ( $categories );
    }
////////////////////////////////////////////////////////////////////////////////TAGS
    public function postCreatetag(Request $request)
    {
        
        Tag::create([
            'name' => $request->tag,
            'slug' => str_slug($request->tag),
        ]);

        return redirect('/new/category');
    }


     public function postEdittag(Request $request)
    {

      $rules = array (
            'name' => 'required' 
    );

    $validator = Validator::make ( Input::all (), $rules );
    if ($validator->fails ())
        return Response::json ( array (             
                'errors' => $validator->getMessageBag ()->toArray () 
        ) );
    else {
        
        $data = Tag::find ( $request->id );
        $data->name = ($request->name);
        $data->slug =  str_slug($request->name);
        $data->save ();
        
      }
     return response ()->json ( $data );
    }


  public function postDeletetag(Request $request)
    {

      Tag::find ( $request->id )->delete();
       return response ()->json ();
     
    }

    public function getTags()
    {
        $tags = Tag::get();

        // return response($categories, 200);
        return response ()->json ( $tags );
    }

    ////////////////////////////////////////////////////////////////////Owners

    public function postCreateowner(Request $request)
    {
        
        Owner::create([
            'name' => $request->owner,
            'slug' => str_slug($request->owner),
        ]);

        return redirect('/new/category');
    }


     public function postEditowner(Request $request)
    {

      $rules = array (
            'name' => 'required' 
    );

    $validator = Validator::make ( Input::all (), $rules );
    if ($validator->fails ())
        return Response::json ( array (             
                'errors' => $validator->getMessageBag ()->toArray () 
        ) );
    else {
        
        $data = Owner::find ( $request->id );
        $data->name = ($request->name);
        $data->slug =  str_slug($request->name);
        $data->save ();
        
      }
     return response ()->json ( $data );
    }


  public function postDeleteowner(Request $request)
    {

      Owner::find ( $request->id )->delete();
       return response ()->json ();
     
    }


    ////////////////////////////////////////////////////////////Locations

      public function postCreatelocation(Request $request)
    {
        
        Location::create([
            'name' => $request->location,
            'slug' => str_slug($request->location),
            'town_id' => $request->town_id,
        ]);

        return redirect('/new/category');
    }

     public function postEditlocation(Request $request)
    {


      $rules = array (
            'name' => 'required' 
    );

    $validator = Validator::make ( Input::all (), $rules );
    if ($validator->fails ())
        return Response::json ( array (             
                'errors' => $validator->getMessageBag ()->toArray () 
        ) );
    else {
        
        $data = Location::find ( $request->id );
        $data->name = ($request->name);
        $data->slug =  str_slug($request->name);
        $data->town_id = ($request->town_id);
        $data->save ();
        
      }
     return response ()->json ( $data );
    }


  public function postDeletelocation(Request $request)
    {

      Location::find ( $request->id )->delete();
       return response ()->json ();
     
    }

        public function gettownLocations($id)

    {

        $location = Location::where('town_id', $id)
                  ->get();

        return response ()->json ( $location );

    }

    ////////////////////////////////////////////////////////////Towns

      public function postCreatetown(Request $request)
    {
        
        Town::create([
            'name' => $request->town,
            'slug' => str_slug($request->town),
        ]);

        return redirect('/new/category');
    }

     public function postEdittown(Request $request)
    {


      $rules = array (
            'name' => 'required' 
    );

    $validator = Validator::make ( Input::all (), $rules );
    if ($validator->fails ())
        return Response::json ( array (             
                'errors' => $validator->getMessageBag ()->toArray () 
        ) );
    else {
        
        $data = Town::find ( $request->id );
        $data->name = ($request->name);
        $data->slug =  str_slug($request->name);
        $data->save ();
        
      }
     return response ()->json ( $data );
    }


  public function postDeletetown(Request $request)
    {

      Town::find ( $request->id )->delete();
       return response ()->json ();
     
    }

    public function getTowns()
    {
        $towns = Town::get();

        // return response($categories, 200);
        return response ()->json ( $towns );
    }


}
