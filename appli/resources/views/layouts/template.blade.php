<meta name="csrf-token" content="{{ csrf_token() }}">
<nav>
  <ul>
    <li><a href="/">Home</a></li>
    <li><a href="/about">Parcourir</a></li>
    <li><a href="/Tendance">Tendance</a></li>
    <li><a href="/Playlist">Mes playlist</a></li>
    <li><a href="/Contact">Contact</a></li>
    @guest
        @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @endif

        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

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

<div class="">
  @yield('content')
</div>
<audio controls id="audio">
<script src="/js/jquery.js"></script>
<script src="/js/divers.js"></script>
