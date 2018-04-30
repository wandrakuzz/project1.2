<?php

namespace App\Http\Controllers;

use App\Semak;
use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Suggest;
use App\Profile;
use DB;

class SemakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semaks = Suggest::with('user')->where('status','pending')->paginate(15);
          //$semaks = Suggest::findOrfail(Auth::user()->id)->with('user')->get();
         return view('LectStatus.semak',compact('semaks'));
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

    public function terima($id)
    {

      $terima = Suggest::findOrFail($id);
      $terima->status = 'approved';
      $terima->save();

      return redirect()->route('semak.index');
    }

    public function tolak($id)
    {
      $tolak = Suggest::findOrFail($id);
      $tolak->status='rejected';
      $tolak->save();

      return redirect()->route('semak.index');
    }

    public function SemakPembuktian()
    {
      $pembuktians = Suggest::with('user')->where('status','approved')->paginate(15);

      return view ('LectStatus.semak-pembuktian',compact('pembuktians'));

    }

    public function Senarai()
    {
      $senarais = User::with('profile')->where('user_group','pelajar')->get();
      // dd($senarais->profile->kursus->name);
      return view('LectStatus.senarai-pelajar',compact('senarais'));
    }
}
