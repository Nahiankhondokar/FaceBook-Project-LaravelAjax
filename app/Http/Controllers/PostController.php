<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class PostController extends Controller
{
    

     // Post store

     public function userPostStore(Request $request){

        $unique_name = '';
         if( $request -> hasFile('post_img') ){
 
             $file = $request -> file('post_img');
             $unique_name = md5(time() . rand()) . '.' . $file -> getClientOriginalExtension();
             $file -> move(public_path('media/user/post'), $unique_name);
 
        }     
        
        return Post::create([
            'name'         => Auth::user() -> name,
            'content'      => $request -> content,
            'photo'        => $unique_name,
        ]);
 
     }


     /**
      *  User Post Show
      */
      public function userPostShow(){


      $data = Post::all();
    
      foreach( $data as $post_data ){

        $post = '
        <div class="post-header clearfix">
                <img src="assets/media/img/pp_photo/rrr.jpeg" alt="">
                <div class="post-user-info">
                    <h4 id="post_name"> '. $post_data -> name .' <a href="#"></a></h4>
                    <p id="post_time">12 mins <i class="fas fa-globe-americas"></i></p>
                </div>
                <a class="float-right" href="#"><i class="fas fa-ellipsis-h"></i></a>
            </div>
            <div class="post-content mt-2">
                <p id="post_content">'. $post_data -> content .'</p>
                <img src="media/user/post/'. $post_data -> photo .'" alt="">
            </div>
            <hr>

                

            <div class="post-likes clearfix">
                <div class="like float-left">
                    <img src="assets/media/img/post/like.svg" alt=""> 320
                </div>
                <div class="comment float-right">
                    190 comment 
                </div>
            </div>
            <hr>
            <div class="post-like-comment-share">
                <ul>
                    <li><a href="#"><i class="far fa-thumbs-up"></i> Like</a></li>
                    <li><a href="#"><i class="far fa-comment-alt"></i> Comment</a></li>
                    <li><a href="#"><i class="fas fa-share"></i> Share</a></li>
                </ul>
            </div>
            <hr>

            <div class="comment-area">


                <div class="post-user-comment clearfix">
                    <img src="assets/media/img/pp_photo/images.jpg" alt="">
                    <div class="comment-content">
                        <h4>Asraful Haque</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, at.</p>
                    </div>
                </div>

                



            </div>
      ';


      }

        return $post;

      }
 
}
