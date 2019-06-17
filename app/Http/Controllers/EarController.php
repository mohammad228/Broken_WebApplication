<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EarController extends Controller
{


    public function __construct()
    {
        $this->middleware('accessControl');
    }


    public function index()
    {

        return view('Ear.ear');

    }

    public function ear(Request $request){

        echo "<script>setTimeout(function(){ window.location.href = 'http://localhost:8082/ear'; }, 0);</script>";
        return view('Ear.show');

    }
}
