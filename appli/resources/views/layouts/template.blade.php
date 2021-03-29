<meta name="csrf-token" content="{{ csrf_token() }}">
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

<script src="/js/jquery.js"></script>
<script src="/js/divers.js"></script>

<style media="screen">
  *{
    margin: 0 auto;
    padding: 0;
    font-family: 'Raleway', sans-serif;
  }
  li {
    list-style-type: none;
  }

  .templategen {
    position: relative;
    width: 100%;
    height: 100vh;
    background-color: #EBEBEB;
    display: grid;
    grid-template-columns: 0.5fr 3fr;
    grid-template-rows: 2.8fr 0.2fr;
    grid-template-areas:  "barre content"
                          "barre audio";
  }

  #barre {
    position: relative;
    grid-area: barre;
    background-color: #CBCBCB;
    width: 100%;
  }
  #barre ul {
    position: relative;
    top: 20%;
    left: 20%;
  }
  #barre li {
    margin: 5% 0% 5% 0%;
  }
  #barre a {
    text-decoration: none;
    color: #616161;
    font-size: 1.3rem;
  }
  #barre a:hover {
    text-decoration: underline;
  }

  #content {
    position: relative;
    grid-area: content;
    width: 100%;
  }

  #audio {
    position: relative;
    grid-area: audio;
    width: 100%;
    height: 100%;
  }

  audio::-webkit-media-controls-play-button,
  audio::-webkit-media-controls-panel {
  background-color: #ABABAB;
}

</style>
