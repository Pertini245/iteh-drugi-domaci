<?php

namespace App\Http\Controllers;

use App\Http\Resources\GradResource;
use App\Models\Grad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GradController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gradovi = Grad::all();
        return GradResource::collection($gradovi);
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
     * @param  \App\Models\Grad  $grad
     * @return \Illuminate\Http\Response
     */
    public function show(Grad $grad)
    {
        return new GradResource($grad);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grad  $grad
     * @return \Illuminate\Http\Response
     */
    public function edit(Grad $grad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grad  $grad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grad $grad)
    {
        $validator = Validator::make($request->all(), [
            'drzava' => 'required|string',
            'naziv' => 'required|string',
            'skraceniNaziv' => 'required|string',
            'postanskiBroj' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $grad->drzava = $request->drzava;
        $grad->naziv = $request->naziv;
        $grad->skraceniNaziv = $request->skraceniNaziv;
        $grad->postanskiBroj = $request->postanskiBroj;

        $grad->save();

        return response()->json(['Grad je izmenjen!', new GradResource($grad)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grad  $grad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grad $grad)
    {
        $grad->delete();
        return response()->json('Grad je obrisan!');
    }
}
