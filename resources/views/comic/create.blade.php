@extends('layouts.base')

@section('pageTitle', 'Crea un nuovo fumetto')
    

@section('content')
    <div class="container p-2">

        <h1 class="my-3">Crea un nuovo fumetto</h1>

        <form method="POST" action="{{route('comic.store')}}">

            @csrf
    
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo">
    
            <label for="floatingTextarea2">Descrizione</label>
            <textarea class="form-control" placeholder="Inserisci la descrizione" name="description" id="description" style="height: 150px"></textarea>
    
            <label for="price">Prezzo</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo">
            
            <label for="type">Tipo</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo">
    
            <label for="thumb">Immagine url</label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci l'url della locandina">
    
            <label for="price">Serie</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie">
    
            <label for="price">Data</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data per lo sconto">
    
            <input type="submit" class="my-3" value="Invia">
          </form>
          <a class="btn btn-primary text-light" href="{{route('comic.index')}}" role="button">Annulla e torna alla lista</a>
    </div>
@endsection