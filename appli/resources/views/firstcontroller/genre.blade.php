@extends('layouts.template')

@section('content')
<h1></h1>
<div class="songs">


@foreach($genre as $s )
        <div class="song{{$s->id}}">


          <p><a href="#" data-file="{{$s->url}}" class="btn-song{{$s->id}}">{{ $s->title }}</a> par {{ $s->artiste }} aimé par {{$s->votes}} personnes</p>
          </div>
      @endforeach
@endsection
</div>



@foreach($genre as $s )
          <style media="screen">
            .song{{$s->id}}{
              background-image: url({{$s->image}});
              background-size: contain;
              background-repeat: no-repeat;
              padding: 150 150 150 150;



            }


          </style>

@endforeach

  <style media="screen">
    .songs {
      display: flex;

    }
  </style>
