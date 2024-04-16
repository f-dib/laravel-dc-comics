<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        $links = config("dbcomics.site.links");
        $buy = config("dbcomics.site.buy");
        $footerlink1 = config("dbcomics.site.footerlink1");
        $footerlink2 = config("dbcomics.site.footerlink2");
        $social = config("dbcomics.site.social");

        return view('comics.index', compact('comics', 'links', 'buy', 'footerlink1', 'footerlink2', 'social'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $links = config("dbcomics.site.links");
        $footerlink1 = config("dbcomics.site.footerlink1");
        $footerlink2 = config("dbcomics.site.footerlink2");
        $social = config("dbcomics.site.social");

        return view('comics.create', compact('links', 'footerlink1', 'footerlink2', 'social'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComicRequest $request)
    {

        $request->validated();


        $newComic = new Comic();

        $newComic->fill($request->all());

        $newComic->save();

        return redirect()->route('comics.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        $links = config("dbcomics.site.links");
        $footerlink1 = config("dbcomics.site.footerlink1");
        $footerlink2 = config("dbcomics.site.footerlink2");
        $social = config("dbcomics.site.social");

        return view('comics.show', compact('comic', 'links', 'footerlink1', 'footerlink2', 'social'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        $links = config("dbcomics.site.links");
        $footerlink1 = config("dbcomics.site.footerlink1");
        $footerlink2 = config("dbcomics.site.footerlink2");
        $social = config("dbcomics.site.social");

        return view('comics.edit', compact('comic', 'links', 'footerlink1', 'footerlink2', 'social'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreComicRequest $request, Comic $comic)
    {

        $request->validated();

        $comic->fill($request->all());

        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }

}
