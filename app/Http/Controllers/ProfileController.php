<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\User;
use Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::where('id',Auth::user()->id)->with('profile','kelab')->get();

        return view ('profile.profile', compact('users'));
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
        //$users = User::findOrFail($id);
        $user = User::where('id',Auth::user()->id)->with('profile','kelab')->get();
        return view('profile.profileform', compact('user'));
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
        // $this->validate($request, ['post_content' => 'required',]);

          // dd($request->all());
        $user = User::findOrFail($id);
        $profile = Profile::where('user_id', $id)->first();

          $user->name      = $request->name;
          $user->email     = $request->email;
          $user->matric_no = $request->matric_no;


          $profile->gender     = $request->gender;
          $profile->nama_penuh = $request->nama_penuh;
          $profile->tahun      = $request->tahun;
          $profile->kursus     = $request->kursus;
          $profile->no_tel     = $request->no_tel;
          $profile->picture    = $request->picture;
          // $profile->picture = $request->picture;

          if ($request->hasFile('picture'))
        {

            $this->validate($request, [
                'picture' => 'required|image'
            ]);

            $image = '/images/profile/profile_' . time() . $user->id . '.' . $request->picture->getClientOriginalExtension();
            $request->picture->move(public_path('images/profile/'), $image);
            $profile->picture = $image;
        }

          $user->save();
          $profile->save();
                  
        return redirect()->action('ProfileController@index')->withMessage('Post has been successfully updated');

        // $profile = Profile::findOrFail($id);
        // $profile->update($request->all());
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
