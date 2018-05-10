<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Kelab;


class AdminController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelabs = Kelab::get();
        return view('admin.create',compact('kelabs'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = User::create([
            'name' => $request->nama,
            'matric_no' => $request->matric_no,
            'kelab_id' => $request->kelab_id,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'user_group'    => $request->user_group
        ]);

            $user->profile()->create([
            'user_id' => $user->id,
            'nama_penuh' => null,
            'gender' => null,
            'tahun'  => null,
            'kursus_id' => null,
            'no_tel' => null,
            'picture' => '/images/img/default_picture.png',
        ]);

        return redirect()->action('AdminController@store')->withMessage('Succesfull');
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
        //$users = User::findOrFail($id);
        $users = User::findOrFail($id)->where('id',$id)->get();
        //dd($users);
        return view ('admin.create', compact('users'));
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
        $user = User::findOrFail($id);
        $kelab = Kelab::where('user_id', $id)->first();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->matric_no = $request->matric_no;
        $user->password = $request->password;
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
        $users = User::findOrFail($id);
        $users->delete();
        return back();
    }

    public function showRegistrationForm()
    {
        $kelabs = Kelab::get();

        return view('admin.create', compact('kelabs'));
    }

    public function front()
    {
        return view('admin.front-page');
    }
}
