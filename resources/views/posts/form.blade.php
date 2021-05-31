{!! Form::open(['route' => 'posts.store']) !!}
  <div class="form-group mb-3">
    {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => '3', 'placeholder' => 'どんなユメを見ましたか？']) !!}
    {!! Form::submit('投稿', ['class' => 'btn btn-primary w-100 mt-3']) !!}
  </div>
{!! Form::close() !!}
