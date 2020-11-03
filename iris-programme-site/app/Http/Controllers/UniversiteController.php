<?php

namespace App\Http\Controllers;

use App\universite;
use Illuminate\Http\Request;

class UniversiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $universites=universite::all();
        return view('admin.pages.universite', compact('universites'));

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

         //  $path=$request->photo;
         $imagePath=request('logo')->store('uploads','public');
         universite::create([
                        'nom_uiv'=>$request->nom_uiv,
                        'ville'=>$request->ville,
                        'contact'=>$request->contact,
                        'email'=>$request->email,
                        'historique'=>$request->historique,
                        'logo'=>$imagePath
                    ]);
              return redirect()->route('universite.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\universite  $universite
     * @return \Illuminate\Http\Response
     */
    public function show(universite $universite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\universite  $universite
     * @return \Illuminate\Http\Response
     */
    public function edit(universite $universite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\universite  $universite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, universite $universite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\universite  $universite
     * @return \Illuminate\Http\Response
     */
    public function destroy(universite $universite)
    {
        //
      $universite->delete();



        return redirect()->route('universite.index');


    }
}
