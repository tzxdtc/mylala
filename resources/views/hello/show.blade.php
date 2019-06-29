@extends('layouts.helloapp')

@section('title','show')

@section('menubar')
  @parent
  show page
@endsection

@section('content')
<table width='400px'>
  @if ($item != null)
    @foreach($item as $item)
    <tr>
      <th width='20px'>id:</th><td>{{$item->id}}</td>
      <th width='50px'>Name:</th><td>{{$item->name}}</td>
      <th width='50px'>age:</th><td>{{$item->age}}</td>
    </tr>

    @endforeach
  @endif
</table>
@endsection

@section('footer')
copyright 2017 tuyano
@endsection
