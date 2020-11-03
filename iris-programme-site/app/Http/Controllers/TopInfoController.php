<?php

namespace App\Http\Controllers;

use App\top_info;
use Illuminate\Http\Request;

class TopInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 //
        $infos=top_info::all();
        return view('admin.pages.info',compact('infos'));



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

        top_info::create([
                        'titre'=>$request->titre,

                    ]);
              return redirect()->route('info.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\top_info  $top_info
     * @return \Illuminate\Http\Response
     */
    public function show(top_info $top_info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\top_info  $top_info
     * @return \Illuminate\Http\Response
     */
    public function edit(top_info $top_info)
    {
        //
        $top_info=top_info::all();
        return view('.\admin\pages\modifier\edit_info', compact('top_info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\top_info  $top_info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, top_info $top_info)
    {
        //
        $top_info->update($request->all());
        return redirect()->route('config.liste');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\top_info  $top_info
     * @return \Illuminate\Http\Response
     */
    public function destroy(top_info $top_info)
    {
        //
        $top_info->delete();
        return redirect()->route('config.liste');
    }
}
