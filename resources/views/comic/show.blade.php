@extends('layouts.base')

@section('pageTitle')
    {{$infoComic->series}}
@endsection

@section('content')
    <div class="container">
        <div class="card my-3">
            <img class="rounded mx-auto d-block my-3" src="{{$infoComic->thumb}}" alt="{{$infoComic->series}}">
            <div class="card-body">
              <h5 class="card-title">{{$infoComic->title}}</h5>
              <p class="card-text">{{$infoComic->description}}</p>
              <p class="card-text">Prezzo: {{$infoComic->price}}$ - Data sconto: {{$infoComic->sale_date}}</p>
              <a class="btn btn-primary text-light" href="{{route('comic.index')}}" role="button">Torna alla lista</a>
            </div>
          </div>
    </div>
@endsection