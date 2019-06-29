@extends('layouts.helloapp')

@section('title','Add')

@section('menubar')
  @parent
  new page
@endsection

@section('content')
<table>
  <form action="add" method="post">
    {{csrf_field()}}
    <tr>
      <th>Name:</th>
      <td><input type="text" name="name"></td>
    </tr>
    <tr>
      <th>mail:</th>
      <td><input type="text" name="mail"></td>
    </tr>
    <tr>
      <th>age:</th>
      <td><input type="text" name="age"></td>
    </tr>
    <tr>
      <th></th>
      <td><input type="submit" name="send"></td>
    </tr>
</form>
</table>

@endsection

@section('footer')
copyright 2017 tuyano
@endsection
