<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;

class helloController extends Controller
{
    public function index(Request $request)
    {
      return view('hello.index',['msg'=>'type form']);
}

    public function post(HelloRequest $request){
      return view('hello.index',['msg'=>'this is right type']);
    }
    // public function post(Request $request){
    //   return view('hello.index', ['msg'=>$request->msg]);
    // }
}
