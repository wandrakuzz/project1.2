<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Verify;
use App\Profile;
use App\User;
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
      $profile = Profile::where('user_id',Auth::user()->id)->get();
      return view('Suggest.verify' , compact('profile'));
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

    $this->validate($request, [
      'activity_name' => 'required',
      'activity_date' => 'required',
      'activity_type' => 'required',
      'activity_report' => 'required|mimes:docx,pdf,rar' ,
    ]);

      // dd($request->all());
      $verify = new Verify;
      $verify->activity_name = $request->activity_name;
      $verify->activity_date = $request->activity_date;
      $verify->activity_type = $request->activity_type;
      $verify->activity_report = $request->hasFile('activity_report')
          ? $request->activity_report->store('public/file') : '';

      // if ($request->hasFile('activity_report')){
      //
      //   $request->activity_report->store('public');
      // }else {
      //   return 'No File Selected';
      // }

      // $post->user_id = Auth::user()->id;
      $verify->save();
      return redirect()->action('VerifyController@store')->withMessage('Post has been successfully added');



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
