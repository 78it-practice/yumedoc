@extends('layouts.app')
@section('title')
   アカウント登録 | YumeDoc
@endsection
@section('content')
  <div class="text-center">
    <h1>アカウント登録</h1>
  </div>
  <div class="row mt-4">
    <div class="col-md-4 offset-md-4">
      {!! Form::open(['route' => 'signup.post']) !!}
        <div class="form-group mb-3">
          @include('commons.form_input', ['name' => 'name', 'label' => 'ユーザ名'])
        </div>
        <div class="form-group mb-3">
          @include('commons.form_input', ['type' => 'email', 'name' => 'email', 'label' => 'メールアドレス'])
        </div>
        <div class="form-group mb-3">
          @include('commons.form_input', ['type' => 'password', 'name' => 'password', 'label' => 'パスワード'])
          <div class="form-text">8文字以上で設定してください。</div>
        </div>
        <div class="form-group mb-3">
          @include('commons.form_input', ['type' => 'password', 'name' => 'password_confirmation', 'label' => 'パスワード（確認用）'])
          <div class="form-text">確認のため、パスワードをもう一度入力してください。</div>
        </div>
        {!! Form::submit('登録', ['class' => 'btn btn-primary w-100']) !!}
      {!! Form::close() !!}
    </div>
  </div>
@endsection
