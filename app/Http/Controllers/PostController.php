<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index(){
        $data=Post::cursorPaginate(5);
        return view("post.index",["posts"=>$data , 'pageTitle'=>'Blog']);
    }

    function create(){
        // $post = Post::create([
        //     'title'=> 'my frist post ',
        //     'body'=>'my unique post which i want to find it',
        //     'author'=>'mano',
        //     'published'=>true,
        // ]) ;

        Post::factory(100)->create();
        return redirect('/blog');
    }

    function show ($id){
        $post = Post::findOrFail($id);
        return view('post.show',['post'=>$post , 'pageTitle'=>$post->title ]);
    }

    function delete(){
        Post::destroy(3);
        return redirect('/blog');
    }
}
