<?php

namespace App\Http\Controllers;

use App\categorie_prog;
use Illuminate\Http\Request;

class CategorieProgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories=categorie_prog::all();
        return view('admin.pages.niveau_categorie',compact('categories')); 
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
        categorie_prog::create([  	 	 	 	
            'categorie'=>$request->categorie, 
        ]);             
           return redirect()->route('niveau.index');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\categorie_prog  $categorie_prog
     * @return \Illuminate\Http\Response
     */
    public function show(categorie_prog $categorie_prog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\categorie_prog  $categorie_prog
     * @return \Illuminate\Http\Response
     */
    public function edit(categorie_prog $categorie_prog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\categorie_prog  $categorie_prog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, categorie_prog $categorie_prog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\categorie_prog  $categorie_prog
     * @return \Illuminate\Http\Response
     */
    public function destroy(categorie_prog $categorie_prog)
    {
        //
    }
}
