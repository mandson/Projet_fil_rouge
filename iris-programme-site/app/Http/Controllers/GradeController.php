<?php

namespace App\Http\Controllers;

use App\grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    
            $grades=grade::all();
            return view('admin.pages.proffesseur',compact('grades'));
        
        
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
        grade::create([
            'item_grad'=>$request->item_grad
            
        ]);        
           return redirect()->route('prof.index');   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show(grade $grade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit(grade $grade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, grade $grade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(grade $grade)
    {
        //
    }
}
