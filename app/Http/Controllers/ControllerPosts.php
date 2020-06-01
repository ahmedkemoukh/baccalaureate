<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\input;

class ControllerPosts extends Controller
{
    public function index()
    {
        $post=Post::get();
        return view("post.index",compact('post'));
    }

    public function edit($id)
    {
    $post=Post::findOrfail($id);
    return view('post.edit',compact("post"));
    }

    public function update($id,Request $req)
    {
        $post=Post::findOrfail($id);
        $post->update($req->all());
        return redirect(route('news.edit',$id));
    }
}
