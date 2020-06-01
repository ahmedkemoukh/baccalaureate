<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use App\Post;
use App\user;

class PostsController extends Controller
{


  public function index()
  {
      //user::create(["name"=>"ahmed","email"=>"test@yahoo.com","password"=>Hash::make("123")]);
      Auth::attempt(['email'=>'test@yahoo.com','password'=>'123']);

      $post=Post::get();
      return view('post.index',compact('post'));
  }

  public function home(Request $req)
  {

      return view('post.home');
  }
}
