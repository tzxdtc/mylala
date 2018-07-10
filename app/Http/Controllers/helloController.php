<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Validator;

class helloController extends Controller
{
    public function index(Request $request)
    {
      $validator = Validator::make($request->query(),[
        'id' => 'required',
        'pass' => 'required',
      ]);
      if ($validator->fails()){
        $msg = 'there is a problem in query';
      }else{
        $msg ='id and password has recepted,please type the form';
      }
      return view('hello.index',['msg'=>$msg,]);
}

    public function post(Request $request){
      $validator = Validator::make($request->all(),[
        'name' => 'required',
        'mail' =>'email',
        'age' => 'numeric|between:0,150',
      ]);
      if ($validator->fails()){
        return redirect('/hello')
        ->withErrors($validator)
        ->withInput();
      }
      return view('hello.index',['msg'=>'this is right type']);
    }
    // public function post(Request $request){
    //   return view('hello.index', ['msg'=>$request->msg]);
    // }
}
