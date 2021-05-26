@extends('layouts.app')
@section('content')
  <h1>ホーム</h1>
  <p>ログイン中のユーザ: {{ Auth::user()->name }}</p>
@endsection
