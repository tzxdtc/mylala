@extends('layouts.helloapp')

@section('title','Index')

@section('menubar')
  @parent
  index page
@endsection

@section('content')
<table>
<tr><th>Name</th><th>Mail</th><th>Age</th></tr>
@foreach($items as $item)
var_dump($items);
  <tr>
    <td>{{$item->name}}</td>
    <td>{{$item->mail}}</td>
    <td>{{$item->age}}</td>
  </tr>
@endforeach
</table>

@endsection

@section('footer')
copyright 2017 tuyano
@endsection
