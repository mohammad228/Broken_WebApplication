<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class OpenRedirectController extends Controller
{



    public function __construct()
    {
        $this->middleware('accessControl');
    }

    public function index()
    {

        return view('OpenRedirect.open');

    }

    public function redirect(Request $request)
    {
        $referer = $request->headers->all()['referer'];
        return Redirect::to($referer[0]);
    }


    public function redirect2()
    {

        return Redirect::to(Input::get('url'));

    }

}
