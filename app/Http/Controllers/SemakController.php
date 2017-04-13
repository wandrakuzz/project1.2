<?php

namespace App\Http\Controllers;

use App\Semak;
use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Suggest;

class SemakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $suggests = Suggest::findOrfail(Auth::user()->id)->with('user')->get();

        return view('LectStatus.semak',compact('suggests'));
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
     * @param  \App\Semak  $semak
     * @return \Illuminate\Http\Response
     */
    public function show(Semak $semak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Semak  $semak
     * @return \Illuminate\Http\Response
     */
    public function edit(Semak $semak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Semak  $semak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Semak $semak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Semak  $semak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Semak $semak)
    {
        //
    }
}
