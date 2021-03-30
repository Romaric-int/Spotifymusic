
@extends('layouts.template')



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
