<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        // return view('nome_cartella.nome_file', compact('variabile dove richiamo Comic::all()'));
        return view('comic.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $comic = new Comic();

        // modifica al model Comic fatta altrimenti non funziona
        $comic->fill($data);

        $comic->save();

        // return redirect()->route('comic.show', ['comic' => $comic->id]);
        return redirect()->route('comic.index')->with('status', 'Fumetto creato!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // se passo ($id) devo usare la if, con dependency injection devo passare il model + id della rotta che in questo caso nella lista delle rotte tra {} è comic
    public function show(Comic $comic)
    {
        // select * from comics where id = valore che gli hai passato come id
        // $comic = Comic::find($id);

        // if($comic){
            return view('comic.show', compact('comic'));
        // }else{
        //     abort(404);
        // }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) // senza dependency injection
    {
        $comic = Comic::find($id);

        if($comic){
            return view('comic.edit', compact('comic'));
        }else{
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();

        // primo metodo
        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];

        // secondo metodo
        // $comic->update($data);


        $comic->save();
                                                /*$comic->id oppure*/
        return redirect()->route('comic.show', ['comic' => $comic->id])->with('status', 'Fumetto modificato!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comic.index')->with('status', 'Fumetto cancellato!');
    }
}
