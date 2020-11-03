<?php

namespace App\Http\Controllers;

use App\proffesseur;
use App\grade;
use Illuminate\Http\Request;

class ProffesseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $proffesseurs=proffesseur::all();
        $grades=grade::all();
        return view('admin.pages.proffesseur',compact('grades','proffesseurs'));
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
        proffesseur::create([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'contact'=>$request->contact,
            'email'=>$request->email,
            'id_grad'=>$request->id_grad,

        ]);
           return redirect()->route('prof.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\proffesseur  $proffesseur
     * @return \Illuminate\Http\Response
     */
    public function show(proffesseur $proffesseur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\proffesseur  $proffesseur
     * @return \Illuminate\Http\Response
     */
    public function edit(proffesseur $proffesseur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\proffesseur  $proffesseur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, proffesseur $proffesseur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\proffesseur  $proffesseur
     * @return \Illuminate\Http\Response
     */
    public function destroy(proffesseur $proffesseur)
    {
        //
    }
}
