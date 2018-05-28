<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use Auth;
use App\Post;
use App\Postphoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
// use Datatables;
// use DB;
// use Image;
// use Storage;

class PostsController extends Controller
{
    public function postCreatepost(Request $request)
    {
        $detail=$request->body;
 
        $dom = new \domdocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
 
        // $images = $dom->getelementsbytagname('img');
 
        // foreach($images as $k => $img){
        //     $data = $img->getattribute('src');
 
        //     list($type, $data) = explode(';', $data);
        //     list(, $data)      = explode(',', $data);
 
        //     $data = base64_decode($data);
        //     $image_name= time().$k.'.png';
        //     $path = public_path() .'/'. $image_name;
 
        //     file_put_contents($path, $data);
 
        //     $img->removeattribute('src');
        //     $img->setattribute('src', $image_name);
        // }
 
        $detail = $dom->savehtml();
        $summernote = $detail;
        $status = '1';

        // $post = Post::create([
        //     'user_id' => Auth::user()->id,
        //     'type' => $request->type,
        //     'coverimage' => $coverimage->store('public/images/photo'),
        //     'title' => $request->title,
        //     'description' => $request->description,
        //     'slug' => str_slug($request->title),
        //     'body' => $summernote,
        //     'status' => $status,
        //     'category' => $request->category,
        //     'subcategory' => $request->subcategory,
        //     'sendemail' => $request->sendemail,
        //     'purchaselink' => $request->purchaselink,
        //     'videolink' => $request->videolink,
        // ]);



        $post = new Post;
        
        $post->user_id = Auth::user()->id;

        $coverimage = $request->coverimage;
        // $coverimage = Image::make($coverimage)->resize( 450, 393);


        // $post->coverimage = Storage::put('public/images/photo', $coverimage->__toString());

        $post->coverimage = $coverimage->store('public/images/photo');
        $post->title = $request->title;
        $post->description = $request->description;
        $post->slug = str_slug($request->title);
        $post->body = $summernote;
        $post->status = $status;
        $post->type = $request->type;
        $post->town= $request->town;
        $post->location= $request->location;
        $post->longitude= $request->longitude;
        $post->latitude= $request->latitude;
        $post->price = $request->price;
        $post->commission = $request->commission;
        $post->purchaselink = $request->purchaselink;
        $post->videolink = $request->videolink;
        $post->save();
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->category);
        $post->owners()->sync($request->owner);

        $images = $request->images;

     if (!empty($images)){
        
        foreach ($images as $image) {
            $postphoto = new Postphoto;
            $postphoto->photo = $image->store('public/images/postphoto');
            $post->postphotos()->save($postphoto);
            } 
     }

        return redirect('/new/post');
    }

    // public function getViewarticle()
    // {

    //   $slug = Auth::user()->slug;
    //   $user = User::where('slug', $slug)->first();
    //   $profile = Auth::user()->profile;
    //   return view('citizen.viewarticle', compact('user', 'profile'));
    // }

    public function getViewpost($slug)
    {
    $post = Post::where('slug', $slug)->first();
    $postphotos = Postphoto::where('post_id',$post->id)->get();

    $prime = Post::where('slug','!=', $slug)
                   ->where('type','Prime')
                   ->orderByRaw('RAND()')->take(2)
                   ->get();

    $recent = Post::where('slug','!=', $slug)
                   ->orderBy('created_at', 'desc')->take(2)
                   ->get();

    $suggest = Post::where('slug','!=', $slug)
                   ->orderByRaw('RAND()')->take(3)
                   ->get();


    if (Auth::check()){
        $user = Auth::user();
        $profile = Auth::user()->profile;
        if (Auth::user()->type == 'admin'){
           return view('admin.viewpost', compact('post','postphotos','user','profile','recent','prime','suggest'));
        }
        else{
           return view('user.userviewpost', compact('post','postphotos','user','profile','recent','prime','suggest'));
        }

      }else{
        return view('viewpost', compact('post','postphotos','user','profile','recent','prime','suggest'));
      } 

      
    }

    public function getadminViewpost($slug)
    {
    $post = Post::where('slug', $slug)->first();
    $postphotos = Postphoto::where('post_id',$post->id)->get();
    if (Auth::check()){
        $user = Auth::user();
        $profile = Auth::user()->profile;
        if (Auth::user()->type == 'admin'){
           return view('admin.viewpost', compact('post','postphotos','user','profile'));
        }
        else{
           return view('user.viewpost', compact('post','postphotos','user','profile'));
        }

      } 

      return view('viewpost', compact('post','postphotos','user','profile'));
    }


    public function postEditpost(Request $request)
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
        
        $data = Post::find ( $request->id );
        $data->title = $request->title;
        $data->description = $request->description;
        $data->type = $request->type;
        $data->town= $request->town;
        $data->location= $request->location;
        $data->longitude= $request->longitude;
        $data->latitude= $request->latitude;
        $data->price = $request->price;
        $data->purchaselink = $request->purchaselink;
        $data->videolink = $request->videolink;
        $data->slug = str_slug($request->title);
        $data->save ();
        
      }
     return response ()->json ( $data );
    }


  public function postDeletepost(Request $request)
    {

      $postphotos = Postphoto::where('post_id', $request->id)->pluck('photo');
      foreach($postphotos as $postphoto){

      $postphoto = basename($postphoto);
      $postphoto =(public_path('/storage/images/postphoto/'.$postphoto));
      if(file_exists($postphoto))
       {

        unlink($postphoto);

        }

    }
      Postphoto::where('post_id', $request->id)->delete();

      $photo = Post::where('id', $request->id)->value('coverimage');
      $photo = basename($photo);
      $photo =(public_path('/storage/images/photo/'.$photo));
      if(file_exists($photo))
       {

        unlink($photo);

        }
       Post::find ( $request->id )->delete();

       return response ()->json ();
     
    }


    public function favoritePost(Post $post)
{
    Auth::user()->favorites()->attach($post->id);

    return back();
}

/**
 * Unfavorite a particular post
 *
 * @param  Post $post
 * @return Response
 */
public function unFavoritePost(Post $post)
{
    Auth::user()->favorites()->detach($post->id);

    return back();
}

}
