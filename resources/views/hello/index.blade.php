@extends('layouts.helloapp')

@section('title','Index')

@section('menubar')
  @parent
  index page
@endsection

@section('content')
  <p>{{$msg}}</p>
@if (count($errors) > 0)
<p>there is a problem with your type</p>
@endif

<table>
<form action="hello" method="post">
  {{ csrf_field() }}

@if ($errors->has('msg'))

<tr><th>ERROR</th><td>{{$errors->first('msg')}}</td></tr>

@endif

<tr><th>Message:</th><td><input type="text"
  name = "msg" value="{{old('msg')}}"></td></tr>


<tr><th></th><td><input type="submit"
  name = "send"></td></tr>
</form>
</table>

@endsection

@section('footer')
copyright 2017 tuyano
@endsection
