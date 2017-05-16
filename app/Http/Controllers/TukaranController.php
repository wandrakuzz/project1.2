<?php

namespace App\Http\Controllers;

use App\Tukaran;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Kelab;

class TukaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tukarans = User::where('id',Auth::id())->get();
        $sigs = Kelab::get();

        return view('change_sig.tukar',compact('tukarans','sigs'));

    }

    public function view()
    {

        $tukarans = User::with('profile')->where('status',true)->get();
        $sigs = Kelab::get();
        // dd($tukarans);
        return view('change_sig.lec_view',compact('tukarans','sigs'));

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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tukaran  $tukaran
     * @return \Illuminate\Http\Response
     */
    public function show(Tukaran $tukaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tukaran  $tukaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Tukaran $tukaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tukaran  $tukaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tukarans = User::findOrFail($id);

        $tukarans->kelab_id     = $request->kelab_latest;
        $tukarans->alasan       = $request->alasan;
        $tukarans->status       = false;

        $tukarans->save();
        return redirect('send');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tukaran  $tukaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tukaran $tukaran)
    {
        //
    }


    public function change(Request $request, $id)
    {
        $tukarans = User::findOrFail($id);

        $tukarans->kelab_baru   = $request->kelab_baru;
        $tukarans->alasan       = $request->alasan;
        $tukarans->status       = true;


        $tukarans->save();
        return redirect('/tukar');
    }


}
