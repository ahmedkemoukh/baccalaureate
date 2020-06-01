<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
class loginAdminController extends Controller
{

    public function login(Request $request)
    {
        $this->validate($request,['email'=>'required|email','password'=>'required|min:2']);

        if(Auth::guard("controller")->attempt(['email'=>$request->email,'password'=>$request->password])
        ||Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
           return redirect()->intended(route('post.home'));

        }

           return redirect()->back()->withInput($request->only('email'));
    }

}
