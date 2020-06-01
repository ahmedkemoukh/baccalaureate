<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\contracts\Auth\Guard;
use App\Link;
use App\Post;

class controllerLink extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Guard $g)
    {
        dd($g->user()->remember_token);
        $post=Post::get();
        return view("post.index",compact('post'));
    }
}
