<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

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

        return view('comic.index', compact('comics', 'links', 'buy', 'footerlink1', 'footerlink2', 'social'));
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

        return view('comic.create', compact('links', 'footerlink1', 'footerlink2', 'social'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $newComic = new Comic();

        $newComic->title = $request->title;
        $newComic->description = $request->description;
        $newComic->thumb = $request->thumb;
        $newComic->price = $request->price;
        $newComic->series = $request->series;
        $newComic->sale_date = $request->sale_date;
        $newComic->type = $request->type;
        $newComic->artists = $request->artists;
        $newComic->writers = $request->writers;

        $newComic->save();

        return redirect()->route('comic.index');

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

        return view('comic.show', compact('comic', 'links', 'footerlink1', 'footerlink2', 'social'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
