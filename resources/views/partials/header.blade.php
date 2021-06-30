<header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand ms-3 @if ( Route::currentRouteName() === 'home' ) active @endif" href="{{route('home')}}">DC-Comics</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link  @if ( Route::currentRouteName() === 'home' ) active @endif" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  @if ( Route::currentRouteName() === 'comics.index' ) active @endif" href="{{ route('comics.index') }}">I nostri fumetti</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if ( Route::currentRouteName() === 'comics.create' ) active @endif" href="{{ route('comics.create') }}">Inserisci un nuovo fumetto</a>
            </li>
          </ul>
        </div>
      </nav>

</header>