@extends('layouts.base')

@section('pageTitle')
    {{$comic->series}}
@endsection

@section('content')
    <div class="container">
        <div class="card my-3">
            <img class="rounded mx-auto d-block my-3" src="{{$comic->thumb}}" alt="{{$comic->series}}">
            <div class="card-body">
              <h5 class="card-title">{{$comic->title}}</h5>
              <p class="card-text">{{$comic->description}}</p>
              <p class="card-text">Prezzo: {{$comic->price}}$ - Data sconto: {{$comic->sale_date}}</p>
              <a class="btn btn-primary text-light" href="{{route('comic.index')}}" role="button">Torna alla lista</a>
            </div>
          </div>
    </div>
@endsection