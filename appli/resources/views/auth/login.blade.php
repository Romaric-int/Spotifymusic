<!-- @extends('layouts.app') -->

@section('content')
<div class="logingeneral">

  <div class="loginimg">
  </div>

  <div class="loginform">
    <form class="loginform" method="POST" action="{{ route('login') }}">
        @csrf
            <label id="content2" for="email">{{ __('Email') }}</label>
                <input id="content3" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <br>
            <label id="content4" for="password" >{{ __('Mot de passe') }}</label>
                <input id="content5" type="password" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <br>
                    <input id="content6" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label id="content7" class="form-check-label" for="remember">
                        {{ __('Se souvenir de moi') }}
                    </label>
                    <br>
                <button id="content9" type="submit" class="btn btn-primary">
                    {{ __('se connecter') }}
                </button>
                <br>
                @if (Route::has('password.request'))
                    <a id="content8" href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié ?') }}
                    </a>
                @endif
    </form>
  </div>
</div>
@endsection
