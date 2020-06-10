<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\like;
use App\Models\bangtin;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



class LikeController extends Controller
{
    public function like_bangtin(Request $request)
   {
    // echo "banhbao";die;
       $post_id = $request['postId'];
       $is_like = $request['isLike'] === 'true';
       $update = false;
       $post = bangtin::find($post_id);
       if (!$post) {
           return null;
       }
       $user = Auth::user();
       $like = $user->user_likes()->where('id_user', $post_id)->first();
       if ($like) {
           $already_like = $like->like;
           $update = true;
           if ($already_like == $is_like) {
               $like->delete();
               return null;
           }
       } else {
           $like = new like();
       }
       $like->like = $is_like;
       $like->id_user = $user->id;
       $like->id_bangtin = $post->id;
       if ($update) {
           $like->update();
       } else {
           $like->save();
       }
       return null;
   }
}
