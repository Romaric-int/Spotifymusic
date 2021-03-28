@extends('layouts.app')

@section('content')

                <div class="logingeneral">
                  <div class="loginimg">
                    <img src="../../../img/waves.gif" alt="">
                  </div>
                  <div class="divlogin">
                    <form class="loginform" method="POST" action="{{ route('register') }}">
                        @csrf
                        <h2>S'inscrire</h2>
<br>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="pseudo">

<br>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="email">


<br>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="mot de passe">

<br>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="confirmation">
<br>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('S inscrire') }}
                                </button>
<br>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="message">{{ $message }}</strong>
                                    </span>
                                @enderror

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
                      </div>
                    </form>
                </div>

@endsection

<style media="screen">

*{
  margin: 0 auto;
  padding: 0;
  font-family: 'Roboto', sans-serif;
}

.message {
  font-size: 0.7rem;
  font-weight: normal;
  color: red;
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
  left: 15%;
  margin-top: 8%;
}

.divlogin {
  position: relative;
  right: 30%;
  margin-top: 15%;
}

.loginform {
  width: 150%;
  height: 50%;
  border: 2px solid #616161;
  border-radius: 10px;
  padding: 50% 0 30% 50%;
}



</style>
