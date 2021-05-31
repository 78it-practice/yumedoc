@extends('layouts.app')
@section('content')
  <div class="row">
    @include('users.card')
    <div class="col-sm-8">
      @include('posts/form')
      @include('posts/posts')
    </div>
  </div>
@endsection
