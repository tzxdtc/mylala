@extends('layouts.helloapp')

@section('title','Person.Add')

@section('menubar')
  @parent
  new add page
@endsection

@section('content')
  @if(count($errors) > 0)
  <div>
    <ul>
      @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  @endif
<table>
  <form action="add" method="post">
    {{csrf_field()}}
    <tr>
      <th>Name:</th>
      <td><input type="text" name="name" value="{{old('name')}}"></td>
    </tr>
    <tr>
      <th>mail:</th>
      <td><input type="text" name="mail" value="{{old('mail')}}"></td>
    </tr>
    <tr>
      <th>age:</th>
      <td><input type="number" name="age" value="{{old('age')}}"></td>
    </tr>
    <tr>
      <th></th>
      <td><input type="submit" value="send"></td>
    </tr>
</form>
</table>

@endsection

@section('footer')
copyright 2017 tuyano
@endsection
