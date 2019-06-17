<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Session;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function login()
    {
        return view('login');
    }

    public function loginCheck(Request $request)
    {

        $input=$request->all();
        $user = User::where('username',$input['username'])->where('password',$input['password'])->get()->first();
        if (isset($user)){
            Session::put('login',true);
            return redirect('/dashboard');
        }
        return back()->withInput();
    }

    public function register()
    {
        return view('welcome');
    }


    public function registerSubmit(Request $request)
    {

        $input=$request->all();
        $user = new User();
        $user->name=$input['name'];
        $user->username=$input['username'];
        $user->password=$input['password'];
        $user->save();
        return view('login');
    }
}
