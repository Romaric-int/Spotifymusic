<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="/css/scss/main.css">
<div class="templategen">
  <nav id="barre">
    <ul class="barregauche">
      @if(Auth::check())
        <li><a href="/profil/{{ Auth::user()->id }}">Profil {{ Auth::user()->name }}</a></li>
      @endif
      @if(Auth::check() == false)
      <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
      </li>
      @endif

      <br><br>
      <li><a href="/">Accueil</a></li>
      <li><a href="/parcourir">Parcourir</a></li>
      <li><a href="/Artistes">Artistes</a></li>
      <li><a href="/tendance">Tendance</a></li>
      <li><a href="/MesLikes">Mes Likes</a></li>

      @if(Auth::check())
        <li><a href="/create">Upload</a></li>
      @endif
      <br><br>
      @guest


          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
          @endif
      @else


              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              </div>
          </li>
      @endguest
      </ul>
  </nav>

  <div id="content">
    @yield('content')
  </div>
  <audio controls id="audio">
</div>

<div class="theme-switch">
    <div class="switch"></div>
  </div>

<script src="/js/jquery.js"></script>
<script src="/js/divers.js"></script>

<style media="screen">






</style>
