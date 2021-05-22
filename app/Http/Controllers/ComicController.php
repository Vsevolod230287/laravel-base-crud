<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }


    public function create()
    {
        return view('comics.create');
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $comic_obj = new Comic();
        $comic_obj->fill($data);
        $comic_obj->save();

        $comic = Comic::orderBy('id', 'desc')->first();

        return redirect()->route('comics.show', $comic);
    }


    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }


    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }


    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        $comic->update($data);

        return redirect()->route('comics.show', compact('comic'));
    }


    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
