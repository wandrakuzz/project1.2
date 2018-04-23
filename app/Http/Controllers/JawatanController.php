<?php

namespace App\Http\Controllers;

use App\Jawatan;
use Illuminate\Http\Request;

class JawatanController extends Controller
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
        $jawatan = new Jawatan;
        $jawatan->$ketua = $request->$kp;
        $jawatan->$timbalan_kp = $request->$tkp;
        $jawatan->setiausaha = $request->$su;
        $jawatan->timbalan_su = $request->$tsu;
        $jawatan->bendahari = $request->$bendahari;
        $jawatan->timbalan_bendahari = $request->$tbendahari;
        $jawatan->ajk_program = $request->$ajkprogram;
        $jawatan->ajk_publisiti = $request->$ajk_publisiti;
        $jawatan->ajk_cenderamata = $request->$ajk_cenderamata;
        $jawatan->ajk_tugaskhas = $request->$ajk_tugaskhas;
        $jawatan->ajk_teknikal = $request->$ajk_teknikal;
        $jawatan->ajk_perhubungan = $request->$ajk_perhubungan;

        $jawatan->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jawatan  $jawatan
     * @return \Illuminate\Http\Response
     */
    public function show(Jawatan $jawatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jawatan  $jawatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Jawatan $jawatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jawatan  $jawatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jawatan $jawatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jawatan  $jawatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jawatan $jawatan)
    {
        //
    }
}
