@extends('layouts.helloapp')

@section('title','delete')

@section('menubar')
  @parent
  delete page
@endsection

@section('content')
<form action="del" method="post">
<table>
{{csrf_field()}}
  <input type='hidden' name='id' value='{{$form->id}}'>
    <tr>
      <th>Name:</th>
      <td>{{$form->name}}</td>
    </tr>
    <tr>
      <th>mail:</th>
      <td>{{$form->mail}}</td>
    </tr>
    <tr>
      <th>age:</th>
      <td>{{$form->age}}</td>
    </tr>
    <tr>
      <th></th>
      <td><input type="submit" value="send"></td>
    </tr>
</table>
</form>

@endsection

@section('footer')
copyright 2017 tuyano
@endsection
