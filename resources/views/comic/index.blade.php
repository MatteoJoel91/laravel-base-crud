@extends('layouts.base')

@section('pageTitle', 'Info comic')


@section('content')
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Locandina</th>
                <th scope="col">Titolo</th>
                <th scope="col">Serie</th>
                <th scope="col">tipo</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Data sconto</th>
                <th scope="col">Descrizione</th>
              </tr>
            </thead>
            <tbody>

                @foreach ( $comics as $comic )
                    <tr>
                        <th><img src="{{$comic->thumb}}" alt="{{$comic->series}}"></th>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->type}}</td>
                        <td>{{$comic->price}}</td>
                        <td>{{$comic->sale_date}}</td>
                        <td>{{$comic->description}}</td>
                    </tr>
                @endforeach
              
            </tbody>
          </table>
    </div>
@endsection