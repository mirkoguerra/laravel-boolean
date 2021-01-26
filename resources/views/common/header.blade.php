<header>

  <img src="img/logo.png" alt="logo">
  <ul>
    @foreach(config('configurazione.routes') as $route)
    <li class="{{ Route::currentRouteName() == $route['pathId'] ? 'active' : '' }}"><a href="{{ route($route['pathId']) }}">{{ $route['displayText'] }}</a></li>
    @endforeach
  </ul>

</header>
