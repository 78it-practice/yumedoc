<ul class="nav nav-pills mb-3 row">
  <li class="nav-item col-xs-12 col-sm-6 col-lg-3">
    <a href="{{ route('users.show', ['user' => $user->id]) }}" class="nav-link d-flex flex-column justify-content-center align-items-center {{ Request::routeIs('users.show') ? 'active' : '' }}">
      見たユメ
      <span class="badge bg-light text-dark mt-1 w-100">{{ $user->posts_count }}</span>
    </a>
  </li>
  <li class="nav-item col-xs-12 col-sm-6 col-lg-3">
    <a href="{{ route('users.favorites', ['id' => $user->id]) }}" class="nav-link d-flex flex-column justify-content-center align-items-center {{ Request::routeIs('users.favorites') ? 'active' : '' }}">
      お気に入り
      <span class="badge bg-light text-dark mt-1 w-100">{{ $user->favorites_count }}</span>
    </a>
  </li>
  <li class="nav-item col-xs-12 col-sm-6 col-lg-3">
    <a href="{{ route('users.followings', ['id' => $user->id]) }}" class="nav-link d-flex flex-column justify-content-center align-items-center {{ Request::routeIs('users.followings') ? 'active' : '' }}">
      フォロー中
      <span class="badge bg-light text-dark mt-1 w-100">{{ $user->followings_count }}</span>
    </a>
  </li>
  <li class="nav-item col-xs-12 col-sm-6 col-lg-3">
    <a href="{{ route('users.followers', ['id' => $user->id]) }}" class="nav-link d-flex flex-column justify-content-center align-items-center {{ Request::routeIs('users.followers') ? 'active' : '' }}">
      フォロワー
      <span class="badge bg-light text-dark mt-1 w-100">{{ $user->followers_count }}</span>
    </a>
  </li>
</ul>
