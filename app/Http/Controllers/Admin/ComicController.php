<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $data = $this->validation($request->all());
        $comic = new Comic();
        $comic->fill($data);
        $comic->save();
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
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
        $formData = $this->validation($request->all());
        $comic->update($formData);
        return redirect()->route('comics.show', $comic->id);
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

    private function validation($data)
    {
        $validationResult = Validator::make($data, [
            'title' => 'required|min:5|max:100',
            'description' => 'required|min:15|max:1000',
            'thumb' => 'nullable',
            'price' => 'required',
            'series' => 'required',
            'sale_date' => 'required|date',
            'type' => 'required'
        ], [
            'title.required' => 'Il titolo ?? obbligatorio',
            'title.min' => 'Il titolo deve essere almeno di :min caratteri',
            'title.max' => 'Il titolo non pu?? superare :max caratteri',
            'description.required' => 'La descrizione ?? obbligatoria',
            'description.min' => 'La descrizione deve essere almeno di :min caratteri',
            'description.max' => 'La descrizione non pu?? superare :max caratteri',
            'price.required' => 'Il prezzo ?? obbligatorio',
            'series.required' => 'La serie ?? obbligatoria',
            'sale_date.required' => 'La data di vendita ?? obbligatoria',
            'sale_date.date' => 'Formato data obbligatorio: yyyy-mm-dd',
            'type.required' => 'La tipologia ?? obbligatoria'
        ])->validate();
        return $validationResult;
    }
}
