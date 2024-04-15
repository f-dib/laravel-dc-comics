<?php

namespace App\Http\Controllers;

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
    public function store(Request $request)
    {

        $this->validation($request->all());

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
    public function update(Request $request, Comic $comic)
    {

        $this->validation($request->all());


        $comic->title = $request->title;
        $comic->description = $request->description;
        $comic->thumb = $request->thumb;
        $comic->price = $request->price;
        $comic->series = $request->series;
        $comic->sale_date = $request->sale_date;
        $comic->type = $request->type;
        $comic->artists = $request->artists;
        $comic->writers = $request->writers;

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



    private function validation($data) {
        
        $validator = Validator::make($data, [
            'title' => 'required | max:255',
            'description' => 'required | max:5000',
            'thumb' => 'nullable | max:1000',
            'price' => 'required | max:8',
            'series' => 'required | max:255',
            'sale_date' => 'required | max:10',
            'type' => 'required | max:100',
            'artists' => 'required | max:100',
            'writers' => 'required | max:100',
        ],
        [
            'title.required' => '* Devi inserire un titolo valido',
            'title.max' => '* Il tuo titolo ha superato il numero massimo di caratteri :max caratteri', 
            'description.required' => '* Devi inserire una descrizione valida',
            'description.max' => '* La tua descrizione ha superato il numero massimo di caratteri :max caratteri', 
            'thumb.max' => '* Il tuo link ha superato il numero massimo di caratteri :max caratteri', 
            'price.required' => '* Devi inserire un prezzo valido',
            'price.max' => '* Il tuo prezzo ha superato il numero massimo di caratteri :max caratteri', 
            'series.required' => '* Devi inserire una serie valida',
            'series.max' => '* Il nome della serie ha superato il numero massimo di caratteri :max caratteri', 
            'sale_date.required' => '* Devi inserire una data valida in formato americano (YYYY-MM-DD)',
            'sale_date.max' => '* La data inserita ha superato il numero massimo di caratteri :max caratteri', 
            'type.required' => '* Devi inserire un tipo valido',
            'type.max' => '* Il tipo ha superato il numero massimo di caratteri :max caratteri', 
            'artists.required' => '* Devi inserire uno o più artisti validi',
            'artists.max' => '* Il nome degli artisti ha superato il numero massimo di caratteri :max caratteri', 
            'writers.required' => '* Devi inserire uno o più scrittori validi',
            'writers.max' => '* Il nome degli scrittori ha superato il numero massimo di caratteri :max caratteri', 
        ])->validate();
    
    }
}
