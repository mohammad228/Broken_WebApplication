<?php

namespace App\Http\Controllers;

use App\XssStore;
use Illuminate\Http\Request;

class XssController extends Controller
{

    public function __construct()
    {
        $this->middleware('accessControl');
    }

   public function index(){
       return view('xss.xss');
   }

    public function reflected(Request $request){

       $input=$request->all();
        return view('xss.xss')->with('name',$input['name']);
    }

    public function store(Request $request){

        $input=$request->all();
         $ins = new XssStore();
         $ins->xss=$input['name'];
//         dd($input,$ins);
         $ins->save();
        $xss= XssStore::all()->last();
        return view('xss.xss')->with('name')->with('name',$xss['xss']);
    }

}
