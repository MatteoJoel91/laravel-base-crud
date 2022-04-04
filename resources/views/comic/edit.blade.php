@extends('layouts.base')

@section('pageTitle')
Modifica: {{$comic->series}}
@endsection
    

@section('content')
    <div class="container p-2">

        <h1 class="my-3">Modifica: {{$comic->series}}</h1>

        {{--passo id dello specifico comic da modificare  prendendo {comic} da route:list e gli passo ->id --}}
        <form method="POST" action="{{route('comic.update', ['comic' => $comic->id])}}">

            @csrf
            
            @method('PUT')

            <label for="title">Titolo</label>
            <input type="text" class="form-control mb-3" id="title" name="title" placeholder="Inserisci il titolo" value="{{old('title', $comic->title)}}">
    
            <label for="floatingTextarea2">Descrizione</label>
            <textarea class="form-control mb-3" placeholder="Inserisci la descrizione" id="description" name="description" style="height: 150px">{{old('description', $comic->description)}}</textarea>
    
            <label for="price">Prezzo</label>
            <input type="number" class="form-control mb-3" id="price" name="price" step=".01" placeholder="Inserisci il prezzo" value="{{old('price', $comic->price)}}">
            
            <label for="type">Tipo</label>
            <input type="text" class="form-control mb-3" id="type" name="type" placeholder="Inserisci il tipo" value="{{old('type', $comic->type)}}">
    
            <label for="thumb">Locandina url</label>
            <input type="text" class="form-control mb-3" id="thumb" name="thumb" placeholder="Inserisci l'url della locandina" value="{{old('thumb', $comic->thumb)}}">
    
            <label for="series">Serie</label>
            <input type="text" class="form-control mb-3" id="series" name="series" placeholder="Inserisci la serie" value="{{old('series', $comic->series)}}">
    
            <label for="sale_date">Data</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data per lo sconto" value="{{old('sale_date', $comic->sale_date)}}">
    
            <button type="submit" class="btn btn-success text-light my-3">Invia</button>
          </form>
          <a class="btn btn-danger text-light my-3" href="{{route('comic.index')}}" role="button">Annulla e torna alla lista</a>
    </div>
@endsection