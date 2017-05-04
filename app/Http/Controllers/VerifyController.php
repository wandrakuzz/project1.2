<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Verify;
use App\Profile;
use App\User;
use App\Suggest;

use Auth;

class VerifyController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $verifys = Suggest::with('user')->where('status','approved')->paginate(15);
    //$semaks = Suggest::findOrfail(Auth::user()->id)->with('user')->get();

    return view('pembuktian.view',compact('verifys'));
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
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
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
    $bukti = Suggest::findOrFail($id);

    return view('pembuktian.verify', compact('bukti'));
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
      $this->validate($request, [
        'activity_name'       => 'required',
        'activity_date_start' => 'required',
        'activity_type'       => 'required',
        'activity_report'     => 'required',
      ]);

      $path = null;

      if ($request->hasFile('activity_report')) {
        $path = $request->file('activity_report')->store('public/file');
      }

      $suggest = Suggest::findOrFail($id);
      $suggest->activity_name         = $request->activity_name;
      $suggest->activity_date_start   = $request->activity_date_start;
      $suggest->activity_type         = $request->activity_type;
      $suggest->path                  = $path;
      $suggest->is_verified           = true;
      $suggest->save();

      return redirect()->action('VerifyController@store')->withMessage('Post has been successfully added');

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
