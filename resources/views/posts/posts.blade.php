@if(count($posts) > 0)
  <ul class="list-unstyled">
    @foreach($posts as $post)
      <li class="mb-3 p-3 bg-light rounded">
        <div class="d-flex align-items-center">
          <img src="{{ asset('imgs/user-temp-post.jpg') }}" alt="" class="me-2 rounded">
          <div class="d-flex flex-column">
            {!! link_to_route('users.show', $post->user->name, ['user' => $post->user->id]) !!}
            <span class="text-muted">{{ $post->created_at }}</span>
          </div>
        </div>
        <p class="mb-0 post-content mt-3">{!! nl2br(e($post->content)) !!}</p>
        <div class="mt-3 d-flex justify-content-between">
          <div class="d-flex align-items-center">
            @if(Auth::user()->is_favorited($post->id))
              {!! Form::open(['route' => ['favorites.unfavorite', $post->id], 'method' => 'delete']) !!}
                {!! Form::button('<i class="fas fa-star react-icon faved"></i>', ['class' => 'btn p-0 me-1', 'type' => 'submit']) !!}
              {!! Form::close() !!}
            @else
              {!! Form::open(['route' => ['favorites.favorite', $post->id]]) !!}
                {!! Form::button('<i class="far fa-star react-icon"></i>', ['class' => 'btn p-0 me-1', 'type' => 'submit']) !!}
              {!! Form::close() !!}
            @endif
            <span class="d-flex align-items-center">
              {{-- なぜかfavorited_countだと反応しない --}}
              {{ count($post->favorited) }}
            </span>
          </div>
          @if(Auth::id() == $post->user_id)
            {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
              {!! Form::submit('投稿を削除', ['class' => 'btn btn-danger btn-sm']) !!}
            {!! Form::close() !!}
          @endif
        </div>
      </li>
    @endforeach
  </ul>
  {{ $posts->links() }}
@else
  <div class="card p-3">
    投稿がありません。
  </div>
@endif
