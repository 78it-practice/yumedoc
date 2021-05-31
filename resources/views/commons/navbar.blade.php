<header class="mb-4">
  <nav class="navbar navbar-expand-md navbar-dark">
    <div class="container-fluid">
      {{-- ブランドロゴ --}}
      <a class="navbar-brand" href="/">YumeDoc</a>
      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="ナビゲーションの切替">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbar">
        <ul class="navbar-nav">
          @if(Auth::check())
            <li class="nav-item">
              {!! link_to_route('users.show', 'プロフィール', ['user' => Auth::id()], ['class' => 'nav-link']) !!}
            </li>
            <li class="nav-item">
              {!! link_to_route('logout.get', 'ログアウト', [], ['class' => 'nav-link']) !!}
            </li>
          @else
            <li class="nav-item">
              {!! link_to_route('signup.get', 'アカウント登録', [], ['class' => 'nav-link']) !!}
            </li>
            <li class="nav-item">
              {!! link_to_route('login', 'ログイン', [], ['class' => 'nav-link']) !!}
            </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
</header>
