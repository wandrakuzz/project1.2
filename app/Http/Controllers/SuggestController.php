<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suggest;
use App\Verify;
use App\Profile;
use Auth;
use App\User;


class SuggestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $profiles = Profile::where('user_id',Auth::user()->id)->get();
        // dd($profiles);
        //$suggests = Suggest::findOrfail(Auth::user()->id)->with('user')->get();

         $suggests = Suggest::where('user_id',Auth::id())->get();


        return view('Suggest.view',compact('suggests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('Suggest.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $suggest = new Suggest;
        $suggest->activity_name = $request->activity_name;
        $suggest->activity_date_start = $request->activity_date_start;
        $suggest->activity_date_end = $request->activity_date_end;
        $suggest->activity_time_start = $request->activity_time_start;
        $suggest->activity_time_end = $request->activity_time_end;
        $suggest->activity_summary = $request->activity_summary;
        $suggest->user_id = Auth::id();

        $suggest->save();


      //   $suggest->statusCadangan()->create([
      //     'suggest_id' => $suggest->id,
      // ]);
        return redirect()->action('SuggestController@store')->withMessage('Post has been successfully added');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($users)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
