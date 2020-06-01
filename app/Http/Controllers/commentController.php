<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\comment;

class commentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(Request $request)
    {

      $validation = Validator::make($request->all(),['file'=>'required','message'=>'required']);
      if($validation->passes())
     {
         $data=$request->all();
         $data['user']=auth()->guard('web')->user()->id;
      $objet=comment::create($data);
          return response()->json(['success'=>$data['file']]);
        }


     return response()->json(['success'=>'error']);
    }


}
