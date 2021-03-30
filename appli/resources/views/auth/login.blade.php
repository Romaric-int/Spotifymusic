
@extends('layouts.template')

@section('content')

<div class="logingeneral">

  <div class="loginimg">
    <img src="../../../img/waves.gif" alt="">
  </div>

  <div class="divlogin">
    <form class="loginform" method="POST" action="{{ route('login') }}">
        @csrf
        <h2>Se connecter</h2>
              <br>
                <input type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="email" autofocus>
              <br>
                <input type="password" name="password" required autocomplete="current-password" placeholder="mot de passe">
                <br>
                    <!--<input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                     <label class="form-check-label" for="remember">
                        {{ __('Se souvenir de moi') }}
                    </label> -->
                <button type="submit" class="btn btn-primary">
                    {{ __('se connecter') }}
                </button>
                <br>

                <!-- @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié ?') }}
                    </a>
                @endif -->
              <br>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong class="message">{{ $message }}</strong>
                    </span>
                @enderror

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong class="message">{{ $message }}</strong>
                    </span>
                @enderror
    </form>
  </div>
</div>
@endsection
