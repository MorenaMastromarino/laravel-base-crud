<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::orderBy('id', 'desc')->paginate(4);

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->validationData(),$this->validationErrors());

        $data = $request->all();

        $new_comic = new Comic();

        $data['slug'] = Str::slug($data['title'], '-');
        $new_comic->fill($data);

        $new_comic->save();

        return redirect()->route('comics.show', $new_comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);

        if($comic){
            return view('comics.show', compact('comic'));
        }

        abort(404, 'Questo fumetto non è presente nel database');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);

        if($comic){
            return view('comics.edit', compact('comic'));
        }

        abort(404, 'Questo fumetto non è presente nel database');
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
        $request->validate($this->validationData(),$this->validationErrors());
        $data = request()->all();

        $data['slug'] = Str::slug($data['title'], '-');
        $comic->update($data);

        return redirect()->route('comics.show', $comic);

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

        return redirect()->route('comics.index');
    }

    private function validationData(){
        return [
            'title' => 'required|min:2|max:50',
            'description' => 'required|min:5',
            'thumb' => 'max:255',
            'price' => 'required|numeric|min:1',
            'series' => 'min:2|max:50',
            'sale_date' => 'date',
            'type' => 'required|max:50'
        ];
    }

    private function validationErrors(){
        return [
            'title.required' => "Il titolo è un campo obbligatorio",
            'title.min' => "Il titolo deve contenere almeno :min caratteri",
            'title.max' => "Il titolo deve contenere massimo :max caratteri",

            'description.required' => "La descrizione è un campo obbligatorio",
            'description.min' => "La descrizione deve contenere almeno :min caratteri",

            'thumb.max' => "Questo campo deve contenere massimo :max caratteri",

            'price.required' => "Il prezzo è un campo obbligatorio",
            'price.numeric' => "Il prezzo deve essere un numero",
            'price.min' => "Il prezzo non può essere minore di :min",

            'series.min' => "La serie deve contenere almeno :min caratteri",
            'series.max' => "La serie deve contenere massimo :max caratteri",

            'sale_date.date' => "Questo campo deve essere una data",

            'type.required' => "Il tipo è un campo obbligatorio",
            'title.max' => "Il tipo deve contenere massimo :max caratteri"
        ];
    }
}
