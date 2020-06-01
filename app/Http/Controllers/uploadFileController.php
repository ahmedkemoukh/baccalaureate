<?php

namespace App\Http\Controllers;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\File;

use TheSeer\Tokenizer\Exception;
use App\ficher;

class uploadFileController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(Request $request)
    {

      //$validate=Validator::make($request->all(),['fileUp' => 'required|image|mimes:pdf|max:255']);


    //  $request->validate(["fileUp" =>'required|mimes:jpeg,bmp,png']);
      $validation = Validator::make($request->all(), ["fileUp" =>'required|mimes:pdf','selectB'=>'required','selectM'=>'required','selectT'=>'required']);
      if($validation->passes())
     {

        $image = $request->file('fileUp');
        $new_name = hexdec(uniqid());
       $image->move(public_path('pdf'), $new_name);



       ficher::create(['id'=>$new_name,'user'=>auth()->guard('web')->user()->id,'categori'=>$request->input('selectB').'_'.$request->input('selectM').'_'.$request->input('selectT')]);
          return response()->json(['sussess'=>auth()->guard('web')->user()->id]);

     }
     return response()->json(['sussess'=>'error']);
    }
public function serch(Request $request)
{
    try{
    $d=ficher::findorFail($request->input('serch'));
    return response()->json(['sussess'=>$d->id,"reponse"=>1]);
}
catch(\Exception $e)
{
return response()->json(['sussess'=>'nexist pas',"reponse"=>0]);
}
}
}
