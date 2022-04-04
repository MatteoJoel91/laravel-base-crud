@extends('layouts.base')

@section('pageTitle', 'Lista comics')


@section('content')
    <div class="container">
      
        <h1 class="text-center my-3">Lista Comics</h1>
        <a class="btn btn-warning" href="{{ route('comic.create') }}" role="button">Crea nuovo fumetto</a>
        <table class="table mt-3">
            <thead>
              <tr>
                <th scope="col">Locandina</th>
                <th scope="col">Titolo</th>
                <th scope="col">Serie</th>
                <th scope="col">Tipo</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            <tbody>

                @foreach ( $comics as $comic )
                    <tr>
                        <th><img src="{{$comic->thumb}}" alt="{{$comic->series}}"></th>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->type}}</td>
                        <td><a class="btn btn-primary text-light" href="{{route('comic.show', $comic->id)}}" role="button">Info</a></td>
                    </tr>
                @endforeach
              
            </tbody>
          </table>
    </div>
@endsection