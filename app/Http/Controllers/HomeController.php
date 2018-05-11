<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\User;
use App\Kelab;
use DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tahun = DB::table('profiles')
        ->leftJoin('users', 'users.id', '=', 'profiles.user_id')
        ->where('kelab_id',Auth::user()->kelab_id)
        ->selectRaw('tahun, count(*) as count')
        ->groupBy('tahun')
        ->get();

        $membersig = User::with('profile')
        ->where('kelab_id',Auth::user()->kelab_id)
        ->where('user_group','pelajar')
        ->get();

        $sigs = Kelab::get();
        $members = User::where('user_group','pelajar')->get();


        if (Auth::user()->user_group == 'admin') {
            $pelajars = User::with('profile','kelab')
            ->where('user_group','pelajar')
            ->orderBy('user_group','asc')
            ->paginate(10);

            $penasihats = User::with('profile','kelab')
            ->where('user_group','penasihat')
            ->orderBy('user_group','asc')
            ->paginate(10);

            return view('admin',compact('pelajars','penasihats'));
        }
        return view('LectStatus.berita', compact('tahun','sigs','members','membersig'));
    }

    public function admin()
    {
      return view('admin');
    }
}
