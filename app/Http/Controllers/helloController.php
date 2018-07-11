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
      if ($request->hasCookie('msg')){
        $msg = 'Cookie:' . $request->cookie('msg');
      }else {
        $msg = 'there is no cookie';
      }
      return view('hello.index',['msg'=> $msg]);
}

    // public function post(Request $request){
    //   $rules = [
    //     'name' => 'required',
    //     'mail' =>'email',
    //     'age' => 'numeric',
    //   ];
    //   $messages = [
    //     'name.required' => '请输入名字',
    //     'mail.email' =>'请输入邮箱地址',
    //     'age.numeric' => '请输入数字',
    //     'age.min' => '请输入0以上',
    //     'age.max' => '请输入200以下',
    //   ];
    //   $validator = Validator::make($request->all(),$rules,$messages);
    //
    //   $validator->sometimes('age','min:0',function($input){
    //     return !is_int($input->age);
    //   });
    //
    //   $validator->sometimes('age','max:200',function($input){
    //     return !is_int($input->age);
    //   });
    //
    //   if ($validator->fails()){
    //     return redirect('/hello')
    //     ->withErrors($validator)
    //     ->withInput();
    //   }
    //   return view('hello.index',['msg'=>'this is right type']);
    // }
    public function post(Request $request){
      $validate_rule = [
        'msg' => 'required',
      ];
      $this ->validate($request,$validate_rule);
      $msg = $request->msg;
      $response = new Response(view('hello.index',['msg'=>
    '[' . $msg . ']cookie has been reserved']));
    $response->cookie('msg', $msg, 100);
    return $response;

    }
}
