<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:controller');
    }
}
