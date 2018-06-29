<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class helloController extends Controller
{
    public function index()
    {
      $data = ['msg'=>'please typr your name',
    ];
      return view('hello.index',$data);
}
    public function post(Request $request){
      $msg = $request->msg;
      var_dump($msg);
      $data = [
        'msg'=>'こんにちは、' . $msg . 'さん',
      ];
      return view('hello.index', $data);
    }
}
