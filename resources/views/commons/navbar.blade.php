<header class="mb-4">
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-fluid">
      {{-- ブランドロゴ --}}
      <a class="navbar-brand" href="/home">YumeDoc</a>
      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="ナビゲーションの切替">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav">
          <!-- テスト用リンク -->
          <li class="nav-item">
            <a class="nav-link" href="/">トップ</a>
          </li>
          <li class="nav-item">
            {!! link_to_route('signup.get', 'アカウント登録', [], ['class' => 'nav-link']) !!}
          </li>
          <li class="nav-item">
            {!! link_to_route('login', 'ログイン', [], ['class' => 'nav-link']) !!}
          </li>
          <li class="nav-item">
            {!! link_to_route('logout.get', 'ログアウト', [], ['class' => 'nav-link']) !!}
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
