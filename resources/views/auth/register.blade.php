@extends('layouts.app')
@section('content')
  <div class="text-center">
    <h1>ユーザ登録</h1>
  </div>
  <div class="row mt-5">
    <div class="col-sm-4 offset-sm-4">
      {!! Form::open(['route' => 'register.post']) !!}
        <div class="form-group mb-3">
          {!! Form::label('name', 'ユーザ名') !!}
          {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group mb-3">
          {!! Form::label('email', 'メールアドレス') !!}
          {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group mb-3">
          {!! Form::label('password', 'パスワード') !!}
          {!! Form::password('password', ['class' => 'form-control']) !!}
          <div class="form-text">8文字以上で設定してください。</div>
        </div>
        <div class="form-group mb-3">
          {!! Form::label('passconf', 'パスワード（確認）') !!}
          {!! Form::password('passconf', ['class' => 'form-control']) !!}
          <div class="form-text">確認のため、パスワードをもう一度入力してください。</div>
        </div>
        {!! Form::submit('登録', ['class' => 'btn btn-primary btn-block']) !!}
      {!! Form::close() !!}
    </div>
  </div>
@endsection
