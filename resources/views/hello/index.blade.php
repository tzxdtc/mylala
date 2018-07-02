@extends('layouts.helloapp')

@section('title','Index')

@section('menubar')
  @parent
  index page
@endsection

@section('content')
  <p>this is the article contents</p>
  <p>written if nesessary</p>
  @component('components.message')
    @slot('msg_title')
    CAUTION!
    @endslot

    @slot('msg_content')
    this is for show
    @endslot
  @endcomponent
@endsection

@section('footer')
copyright 2017 tuyano
@endsection
