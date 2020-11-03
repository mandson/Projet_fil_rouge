<?php

namespace App\Http\Controllers;

use App\actualite;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $actualites=actualite::all();
        return view('admin.pages.actualite', compact('actualites'));
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

         $imagePath=request('image')->store('uploads','public');
        actualite::create([
                        'titre'=>$request->titre,
                        'description'=>$request->description,
                        'image'=>$imagePath
                    ]);
              return redirect()->route('actualite.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function show(actualite $actualite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function edit(actualite $actualite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, actualite $actualite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function destroy(actualite $actualite)
    {
        //
    }
}
