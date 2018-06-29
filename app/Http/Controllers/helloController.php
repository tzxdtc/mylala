<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class helloController extends Controller
{
    public function index(Request $request)
    {
      $data = ['msg'=>'this data is from controller',
    ];
      return view('hello.index',$data);
}
}
