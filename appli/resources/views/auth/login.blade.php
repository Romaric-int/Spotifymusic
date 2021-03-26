<!-- @extends('layouts.app') -->

@section('content')
<div class="logingeneral">

  <div class="loginimg">
    <img src="../../../img/waves.gif" alt="">
  </div>

  <div class="divlogin">
    <form class="loginform" method="POST" action="{{ route('login') }}">
        @csrf
        <h2>Se connecter</h2>
            <!-- <label id="content2" for="email">{{ __('Email') }}</label> -->
              <br>
                <input type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            <!-- <label id="content4" for="password" >{{ __('Mot de passe') }}</label> -->
              <br>
                <input type="password" name="password" required autocomplete="current-password" placeholder="mot de passe">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <br>
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Se souvenir de moi') }}
                    </label>
                    <br>
                <button type="submit" class="btn btn-primary">
                    {{ __('se connecter') }}
                </button>
                <br>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié ?') }}
                    </a>
                @endif
    </form>
  </div>
</div>
@endsection

<style media="screen">

  *{
    margin: 0 auto;
    padding: 0;
    font-family: 'Roboto', sans-serif;
  }

  input {
    /* border-radius: 50px; */
    border: 1px solid #616161;
    border-radius: 50px;
    padding: 5% 2% 5% 5%;
    margin-bottom: 7%;
    background-color: #E8ECED;
  }
  input:focus {
    outline-width: 0;
  }

  .logingeneral {
    background-color: #E8ECED;
    width: 100%;
    height: 100vh;
    display: flex;
    flex-direction: row;
  }

  .loginimg img {
    position: relative;
    width: 35%;
    left: 20%;
    margin-top: 5%;
  }

  .divlogin {
    position: relative;
    right: 20%;
    margin-top: 15%;
  }

  .loginform {
    width: 150%;
    height: 50%;
    border: 2px solid #616161;
    border-radius: 10px;
    padding: 50% 0 0 50%;
  }




</style>
