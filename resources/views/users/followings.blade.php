@extends('layouts.app')
@section('content')
  <div class="row">
    @include('users.card')
    <div class="col-sm-8">
      @include('users.navtabs')
      @include('users.users')
    </div>
  </div>
@endsection
