<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Events\Comment\CommentCreated;
use App\User;
use App\Comment;
use App\Post;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
     public function getComment(Request $request)
    {
        $post_id = $request->post_id;

        $comments = Comment::where('post_id', $post_id)
            ->orderBy('id', 'desc')
            ->get();

        return response($comments, 200);
    }

    public function postComment(Request $request)
    {
        // $data = $request->validate([
        //     'comment' => 'required|min:3',
        //     'post_id' => 'required',
        // ]);

        $comment = Comment::create([
            'comment' => $request->comment,
            'user_id' => Auth::user()->id,
            'published' => 1,
            'post_id' => $request->post_id
        ]);

        $comment = Comment::find($comment->id);

        // event(new CommentCreated($comment));

        return response($comment, 201);
    }

     public function removeComment($id)
    {
        $comment = Comment::where('user_id', Auth::id())
            ->where('id', $id)
            ->first();
        if ($comment != NULL) {

         $comment->delete();
         return response($comment, 201);
        }
        else{
          return response(NULL);
        }
         
    }

    public function Deleteable($id)
    {
        if ($id != Auth::id()) {

         $show = 0;
         return response($show, 201);
        }
        else{

          $show = 1;
          return response($show, 201);
        }
         
    }
}
