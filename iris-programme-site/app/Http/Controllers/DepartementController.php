<?php

namespace App\Http\Controllers;

use App\departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

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
        departement::create([
            'item_dep'=>$request->item_dep
            
        ]);             
           return redirect()->route('config.form');   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function show(departement $departement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function edit(departement $departement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, departement $departement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function destroy(departement $departement)
    {
        //
    }
}
