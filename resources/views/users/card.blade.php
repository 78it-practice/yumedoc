<aside class="col-sm-4 mb-3">
  <!-- sm以下で表示 -->
  <div class="bg-light p-3 d-sm-none">
    <div clsas="card">
      <div class="row g-0">
        <div class="col-4">
          <img class="rounded img-fluid" src="{{ asset('imgs/user-temp.jpg') }}">
        </div>
        <div class="col-8">
          <div class="card-body">
            <h3 class="card-title">{{ $user->name }}</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- md以上で表示 -->
  <div class="card d-none d-sm-block">
    <div class="card-header">
      <h3 class="card-title">{{ $user->name }}</h3>
    </div>
    <div class="card-body">
      <img class="rounded img-fluid" src="{{ asset('imgs/user-temp.jpg') }}">
    </div>
  </div>
  @include('user_follow.follow_button')
</aside>
