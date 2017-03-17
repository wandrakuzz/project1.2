<?php

namespace App\Http\Controllers;

use App\SuggestFeedback;
use Illuminate\Http\Request;

class SuggestFeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $profiles = Profile::where('user_id',Auth::user()->id)->get();
        return view('Suggest.suggest',compact('profiles'));
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
     * @param  \App\SuggestFeedback  $suggestFeedback
     * @return \Illuminate\Http\Response
     */
    public function show(SuggestFeedback $suggestFeedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SuggestFeedback  $suggestFeedback
     * @return \Illuminate\Http\Response
     */
    public function edit(SuggestFeedback $suggestFeedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SuggestFeedback  $suggestFeedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuggestFeedback $suggestFeedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SuggestFeedback  $suggestFeedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuggestFeedback $suggestFeedback)
    {
        //
    }
}
