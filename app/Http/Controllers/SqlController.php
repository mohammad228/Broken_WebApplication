<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SqlController extends Controller
{

    public function __construct()
    {
        $this->middleware('accessControl');
    }


    public function index()
    {
        return view('Sql.sql');
    }

    public function checkPassword(Request $request)
    {

        $input = $request->all();
//        $test = false;
        $input = $input['name'];
        $results = DB::select(DB::raw("SELECT * FROM users where name='$input'"));
        return view('Sql.sql')->with('check', $results);

    }
}
