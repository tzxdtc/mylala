<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class helloController extends Controller
{
    public function index(Request $request)
    {
      return view('hello.index',['msg'=>'type form']);
}

    public function post(Request $request){
      $validate_rule = [
        'name' => 'required',
        'mail' => 'email',
        'age' => 'numeric|between:0,150',
      ];
      $this->validate($request, $validate_rule);
      return view('hello.index',['msg'=>'this is right type']);
    }
    // public function post(Request $request){
    //   return view('hello.index', ['msg'=>$request->msg]);
    // }
}
