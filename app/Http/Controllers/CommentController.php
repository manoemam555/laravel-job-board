<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
        function index(){
        $data=Comment::cursorPaginate(5);
        return view("comment.index",["comments"=>$data , 'pageTitle'=>'Blog']);
    }

    function create(){
        
        //  Comment::create([
        //     'content'=>'my frist comment which i like to find it',
        //     'author'=>'ali',
        //     'posts_id'=>3,
        // ]) ;

        Comment::factory(10)->create();
        return redirect('/comments');
    }

}
