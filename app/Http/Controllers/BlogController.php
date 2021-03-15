<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    //Lab 5 Controllers
    public function index(){
        $post = Post::all();

        return view('blog.index')->with(['post' => $post]);
    }

    public function store(Request $request){
        Post::create([
            'title'=> $request->title,
            'body' => $request->body
        ]);   
        return back();
    }
}
