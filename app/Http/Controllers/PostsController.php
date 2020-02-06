<?php

namespace app\Http\Controllers;
use DB;
use App\Post;

class PostsController{

    public function show($slug){

        // $post = DB::table('posts')->where('slug',$slug)->first();
        // $post = Post::where('slug',$slug)->firstOrFail();

        // // dd($post);

        // if(! $post){
        //     abort(404);
        // }

        return view('post', [
            'post' => Post::where('slug',$slug)->firstOrFail()
            ]);

    }
}