<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suggest;
use App\Jawatan;
use App\Project;
use App\User;


class KemaskiniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $kemaskinis = Suggest::with('user')->where('status','approved')->paginate(15);

      return view('kemaskini.index',compact('kemaskinis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    public function jawatankuasa($id)
    {
        $shows    = Suggest::findOrFail($id);
        $pangkats = Jawatan::get();
        $ahlis    = User::with('profile')->get();

        // dd($shows,$jawatans,$ahlis);
        return view('kemaskini.jawatan',compact('shows','pangkats','ahlis'));
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
        $project = new Project;
        $project->suggest_id          = Suggest::findOrFail($id);
        $project->user_id             = $request->nama_kp;
        $project->jawatan_id          = $request->kp;
        $project->kedatangan          = $request->kedatangan_kp;
        $project->user_id             = $request->nama_tkp;
        $project->jawatan_id          = $request->tkp;
        $project->kedatangan          = $request->kedatangan_tkp;
        $project->user_id             = $request->nama_bendahari;
        $project->jawatan_id          = $request->kp;
        $project->kedatangan          = $request->kedatangan_kp;

        dd($project);
        $project->save();

        return redirect()->action('KemaskiniController@store')->withMessage('Post has been successfully added');
    }

    public function simpan(Request $request , $id)
    {
        $project = new Project;
        $project->suggest_id          = Suggest::findOrFail($id);
        $project->user_id             = $request->nama_kp;
        $project->jawatan_id          = $request->kp;
        $project->kedatangan          = $request->kedatangan_kp;
        $project->kedatangan          = $request->kedatangan_kp;
        $project->suggest_id          = Suggest::findOrFail($id);
        $project->user_id             = $request->nama_tkp;
        $project->jawatan_id          = $request->tkp;
        $project->kedatangan          = $request->kedatangan_tkp;
        $project->suggest_id          = Suggest::findOrFail($id);
        $project->user_id             = $request->nama_bendahari;
        $project->jawatan_id          = $request->kp;
        $project->kedatangan          = $request->kedatangan_kp;

        dd($project);
        $project->save();

        return redirect()->action('KemaskiniController@store')->withMessage('Post has been successfully added');
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
        $shows = Suggest::findOrFail($id);

        return view('kemaskini.edit', compact('shows'));
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
        $this->validate($request, [
          'activity_name'       => 'required',
          'activity_date_start' => 'required',
          'activity_time_start' => 'required',
          'kertas_kerja'        => 'required',
        ]);

        $path = null;

        if ($request->hasFile('kertas_kerja')) {
          $path = $request->file('kertas_kerja')->store('public/file');

        }

        $suggest = Suggest::findOrFail($id);
        $suggest->activity_name         = $request->activity_name;
        $suggest->activity_date_start   = $request->activity_date_start;
        $suggest->activity_time_start   = $request->activity_time_start;
        $suggest->kertas_kerja          = $path;
        $suggest->is_verified           = true;
        $suggest->save();

        return redirect()->action('KemaskiniController@store')->withMessage('Post has been successfully added');
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
