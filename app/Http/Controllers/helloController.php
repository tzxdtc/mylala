<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Validator;
use Illuminate\support\Facades\DB;
use App\Person;

class helloController extends Controller
{
    public function index(Request $request)
    {
      $sort = $request->sort;
      // $items = DB::table('people')->orderBy('age','asc')
      // ->simplePaginate(6);
      $items = Person::orderBy($sort,'asc')
      ->simplePaginate(5);
      $param = ['items' => $items, 'sort' => $sort];
      return view('hello.index',$param);
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
      $items = DB::select('select * from people');
      return view('hello.index',['item' => $items]);
    }

    public function add (Request $request){
      return view('hello.add');
    }

    public function create(Request $request){
      $param = [
        'name' => $request->name,
        'mail' => $request->mail,
        'age' => $request->age,
      ];
      DB::insert('insert into people (name,mail,age) values
      (:name, :mail, :age)', $param);
      return redirect('/hello');
    }

    public function edit(Request $request){
      $param = ['id' => $request->id];
      $item = DB::select('select * from people where id = :id',
      $param);
      return view('hello.edit',['form'=> $item[0]]);
    }

    public function update(Request $request){
      $param = [
        'id' =>$request->id,
        'name' => $request->name,
        'mail' => $request->mail,
        'age' => $request->age,
      ];
      DB::update('update people set name =:name, mail = :mail,
      age = :age where id = :id',$param);
      return redirect('/hello');
    }

    public function del(Request $request){
      $param = ['id' => $request->id];
      $item = DB::select('select * from people where id = :id',
      $param);
      return view('hello.del',['form'=> $item[0]]);
    }

    public function remove(Request $request){
      $param = ['id' => $request->id];
      DB::delete('delete from people where id = :id',$param);
      return redirect('/hello');
    }

    public function show(Request $request){
      $min = $request->min;
      $max = $request->max;

      $item = DB::table('people')
      ->orderBy('age',"asc")->get();
      return view('hello.show', ['item' => $item]);
    }

    public function rest(Request $request){
      return view('hello.rest');
    }

    public function ses_get(Request $request){
      $sesdata = $request->session()->get('msg');
      return view('hello.session',['session_data' =>$sesdata]);
    }

    public function ses_put(Request $request){
      $msg = $request->input;
      $request->session()->put('msg',$msg);
      return redirect('hello/session');
    }
}
