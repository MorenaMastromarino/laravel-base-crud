<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}">Comics Store</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link {{(Route::currentRouteName() === 'home') ? 'active' : ''}}" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a href="{{route('comics.index')}}" class="nav-link {{(Route::currentRouteName() === 'comics.index' ? 'active' : '')}}" href="#">Lista fumetti</a>
          </li>
          <li class="nav-item">
            <a href="{{route('comics.create')}}" class="nav-link {{(Route::currentRouteName() === 'comics.create' ? 'active' : '')}}" href="#">Nuovo fumetto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>