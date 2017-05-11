<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Kelab;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        $kelabs = Kelab::get();

        return view('auth.register', compact('kelabs'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'matric_no' => 'required|unique:users',
            'kelab_id' => 'required',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
      // dd($data);
      $user = User::create([
          'name' => $data['name'],
          'matric_no' => $data['matric_no'],
          'kelab_id' => $data['kelab_id'],
          'email' => $data['email'],
          'password' => bcrypt($data['password']),
      ]);

      $user->profile()->create([
      'user_id' => $user->id,
      'nama_penuh' => null,
      'gender' => null,
      'tahun'  => null,
      'kursus' => null,
      'no_tel' => null,
      'picture' => '/images/img/default_picture.png',

      //column seterusnya pada profiles table
  ]);

  return $user;
  }
}
