<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\commant;
use App\input;

class ControllerComment extends Controller
{
    public function index(Request $req)
    {
        $post=commant::get();

        return view('post.exercice_comp',compact("post"));
    }

    public function show()
    {
        $post=commant::get();
        return redirect(route('exercice.index'));
    }

    public function create(Request $req)
    {
        commant::create($req->all());
        return redirect(route('exercice.index'));
    }

     public function update($id,Request $req)
     {
        $post=commant::findOrfail($id);
        $post->update($req->all());
        $post->save();
        $post1=commant::get();
        return redirect(route('exercice.index'));
     }
     public function destroy($id)
     {
        commant::destroy($id);
        return redirect(route('exercice.index'));
     }
     public function store()
     {

      }
}



