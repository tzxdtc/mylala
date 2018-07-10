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
      $rules = [
        'name' => 'required',
        'mail' =>'email',
        'age' => 'numeric|between:0,150',
      ];
      $messages = [
        'name.required' => '请输入名字',
        'mail.email' =>'请输入邮箱地址',
        'age.numeric' => '请输入数字',
        'age.between' => '请输入0-150',
      ];
      $validator = Validator::make($request->all(),$rules,$messages);
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
