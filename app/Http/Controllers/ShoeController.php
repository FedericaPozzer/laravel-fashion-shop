<?php

namespace App\Http\Controllers;

use App\Models\Shoe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ShoeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shoes = Shoe::paginate(10);
        return view('shoes.index', compact('shoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shoe  $shoe
     * @return \Illuminate\Http\Response
     */
    public function show(Shoe $shoe)
    {
        return view('shoes.show', compact('shoe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shoe  $shoe
     * @return \Illuminate\Http\Response
     */
    public function edit(Shoe $shoe)
    {
        return view("shoes.edit", compact("shoe"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shoe  $shoe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shoe $shoe)
    {
       
        $data = $this->validation($request->all());
        $shoe->update($data);
        return redirect()->route("shoes.show", $shoe);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shoe  $shoe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shoe $shoe)
    {
        //
    }

    private function validation($data) {
        return Validator::make(
             $data,
        [

            "marca" => "required|string",
            "modello" => "required|string",
            "prezzo" => "required|numeric",
            "immagine" => "string",
            "descrizione" => "string",
        ],
        [
            "marca.required" => "Inserisci la marca.",
            "marca.string" => "Inserisci una stringa.",

            "modello.required" => "Inserisci il modello.",
            "modello.string" => "Inserisci una stringa.",

            "prezzo.required" => "Inserisci il prezzo.",
            "prezzo.numeric" => "Inserisci un numero.",

            "immagine.string" => "Inserisci una stringa.",

            "descrizione.string" => "Insersci una stringa.",
        ]
        )->validate();
    }
}


