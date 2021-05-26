@extends('layouts.app')
@section('title')
  ログイン | YumeDoc
@endsection
@section('content')
  <div class="text-center">
    <h1>ログイン</h1>
  </div>
  <div class="row mt-4">
    <div class="col-md-4 offset-md-4">
      {!! Form::open(['route' => 'login.post']) !!}
        <div class="form-group mb-3">
          @include('commons.form_input', ['type' => 'email', 'name' => 'email', 'label' => 'メールアドレス'])
        </div>
        <div class="form-group mb-3">
          @include('commons.form_input', ['type' => 'password', 'name' => 'password', 'label' => 'パスワード'])
        </div>
        {!! Form::submit('ログイン', ['class' => 'btn btn-primary w-100']) !!}
      {!! Form::close() !!}
    </div>
  </div>
@endsection
