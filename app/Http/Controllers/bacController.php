<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ficher;
use App\user;
class bacController extends Controller
{
    public function index($pronch,$matier)
    {
        $data=ficher::all()->where('categori','=',$pronch.'_'.$matier.'_bac');
         return view('post.exercice_comp',compact('data'));

    }
}
