<?php

namespace App\Http\Controllers;

use App\lieu;
use Illuminate\Http\Request;

class LieuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $salles=lieu::all();
        return view('admin.pages.salle',compact('salles')); 
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
       lieu::create([  	 	 	 	
            'item_lieu'=>$request->item_lieu, 
        ]);             
           return redirect()->route('salle.index');   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\lieu  $lieu
     * @return \Illuminate\Http\Response
     */
    public function show(lieu $lieu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lieu  $lieu
     * @return \Illuminate\Http\Response
     */
    public function edit(lieu $lieu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lieu  $lieu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lieu $lieu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lieu  $lieu
     * @return \Illuminate\Http\Response
     */
    public function destroy(lieu $lieu)
    {
        //
    }
}
