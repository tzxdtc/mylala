@extends('layouts.helloapp')

@section('title','Person.ndex')

@section('menubar')
  @parent
  PersonIndex page
@endsection

@section('content')
<table>
  <tr>
    <th>Data</th>
  </tr>
@foreach($items as $item)
  <tr>
    <td>{{$item->getData()}}</td>
  </tr>
@endforeach
</table>

@endsection

@section('footer')
copyright 2017 tuyano
@endsection
