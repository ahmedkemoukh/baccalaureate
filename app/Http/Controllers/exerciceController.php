<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\ficher;
use App\user;
use App\comment;
use Mockery\CountValidator\Exception;

class exerciceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
        $this->middleware('admin')->except('index','show');

    }
     public function index($pronch,$matier)
    {
        $data=ficher::all()->where('categori','=',$pronch.'_'.$matier.'_exercice');
         return view('post.exercice_comp',compact('data'));

    }

    public function show($pronch,$matier,$id)
    {

        $d=ficher::find($id);
           $d=$d->comment()->get();
          foreach($d as $mot)
          {
              $mot['user']=user::find($mot->user);
          }
        return response()->json(['success'=>$d]);
    }

    public function delete($pronch,$matier,$exercice,$id)
    {

        $file=ficher::find($id);
        $comment=$file->comment();
        $comment->delete();
        $file->delete();
        File::delete(public_path('pdf').'\\'.$id);

        return redirect('/'.$pronch.'/'.$matier.'/'.$exercice);
    }

    public function update($pronch,$matier,$exercice,$id,Request $req)
    {

        $file=ficher::find($id);
    $categori=$req->input('selectB').'_'.$req->input('selectM').'_'.$req->input('selectT');
       $file->update(['categori'=>$categori]);

        return redirect('/'.$pronch.'/'.$matier.'/'.$exercice);
    }
}
