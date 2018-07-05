@extends('layouts.helloapp')

@section('title','Index')

@section('menubar')
  @parent
  index page
@endsection

@section('content')
  <p>this is the article contents</p>
  <p>Controller value<br>'message' = {{$message}}</p>
  <p>Controller value<br>'view_message' = {{$view_message}}</p> 

@endsection

@section('footer')
copyright 2017 tuyano
@endsection
