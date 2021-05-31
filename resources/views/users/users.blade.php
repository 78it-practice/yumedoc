@if(count($users) > 0)
  <ul class="list-unstyled">
    @foreach($users as $user)
      <li class="mb-3 p-3 bg-light rounded d-flex">
        <img class="mr-2 rounded" src="{{ asset('imgs/user-temp-post.jpg') }}">
        <div class="d-flex flex-column justify-content-center ms-2">
          <div>
            {{ $user->name }}
          </div>
          <div>
            <p class="m-0">
              {!! link_to_route('users.show', 'プロフィールを見る', ['user' => $user->id]) !!}
            </p>
          </div>
        </div>
      </li>
    @endforeach
  </ul>
@else
  <div class="card p-3">
    ユーザがいません。
  </div>
@endif
