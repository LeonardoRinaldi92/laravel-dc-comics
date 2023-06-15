<?php

namespace App\Http\Controllers;

use App\Models\Comic;
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
        $Comics = Comic::all();

        $navbar = config('db.navBar');
        $icons = config('db.icons');
        $lista1 = config('db.lista1');
        $lista2 = config('db.lista2');
        $lista3 = config('db.lista3');

        return view('pages.comics.index',compact('Comics','navbar','icons','lista1','lista2','lista3'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $navbar = config('db.navBar');
        $icons = config('db.icons');
        $lista1 = config('db.lista1');
        $lista2 = config('db.lista2');
        $lista3 = config('db.lista3');

        return view('pages.comics.create',compact('navbar','icons','lista1','lista2','lista3'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $request->all();
    
        $new_Comic = new Comic();
        $new_Comic->name = $form_data['name'];
        $new_Comic->description = $form_data['description'];
        $new_Comic->thumb = $form_data['thumb'];
        $new_Comic->price = $form_data['price'];
        $new_Comic->series = $form_data['series'];
        $new_Comic->sale_date = $form_data['sale_date'];
        $new_Comic->type = $form_data['type'];
        $new_Comic->artist = json_encode(explode(', ', $form_data['artist']));
        $new_Comic->writers = json_encode(explode(', ', $form_data['writers']));
        $new_Comic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //$comic = Comic::findOrFail($id);

        $navbar = config('db.navBar');
        $icons = config('db.icons');
        $lista1 = config('db.lista1');
        $lista2 = config('db.lista2');
        $lista3 = config('db.lista3');

        return view('pages.comics.show',compact('comic','navbar','icons','lista1','lista2','lista3'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        $navbar = config('db.navBar');
        $icons = config('db.icons');
        $lista1 = config('db.lista1');
        $lista2 = config('db.lista2');
        $lista3 = config('db.lista3');

        return view('pages.comics.edit',compact('comic','navbar','icons','lista1','lista2','lista3'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $form_data = $request->all();

        $comic->name = $form_data['name'];
        $comic->description = $form_data['description'];
        $comic->thumb = $form_data['thumb'];
        $comic->price = $form_data['price'];
        $comic->series = $form_data['series'];
        $comic->sale_date = $form_data['sale_date'];
        $comic->type = $form_data['type'];
        $comic->artist = json_encode(explode(', ', $form_data['artist']));
        $comic->writers = json_encode(explode(', ', $form_data['writers']));
        $comic->update();

        return redirect()->route('comics.show', $comic)->withFlashSucces('Elemento mofidicato!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
