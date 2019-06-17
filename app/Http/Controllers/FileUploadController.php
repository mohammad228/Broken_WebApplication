<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{

    public function __construct()
    {
        $this->middleware('accessControl');
    }

    public function index()
    {
        return view('FileUpload.file');
    }


    public function upload(Request $request)
    {

        $destinationPath = public_path('/images');
        $files = $request->file('file');
        $file_name = $files->getClientOriginalName();
        $file_extension = $files->getClientOriginalExtension();

        if ($request->headers->get('referer') === "http://localhost:8012/file_upload") {
            $files->move($destinationPath, $file_name);
            return view('FileUpload.file')->with('success', true)->with('link', $file_name);
        } elseif ($request->headers->get('referer') === "http://localhost:8012/file_upload_2") {
            $files->move($destinationPath, $file_name);
            return view('FileUpload.file2')->with('success', true)->with('link', $file_name);
        } elseif ($request->headers->get('referer') === "http://localhost:8012/file_upload_3") {
            $files->move($destinationPath, $file_name);
            return view('FileUpload.file3')->with('success', true)->with('link', $file_name);
        } elseif ($request->headers->get('referer') === "http://localhost:8012/file_upload_4") {
            $array = array('php', 'c', 'js', 'config');

            if (in_array($file_extension, $array)) {

                return view('FileUpload.file4')->with('error', 'Your File Is Not Valid ');
            }

            $files->move($destinationPath, $file_name);
            return view('FileUpload.file4')->with('success', true)->with('link', $file_name);
        } else
         {
            dd("Oppppppppps");
        }

    }


    public function upload_logic(Request $request)
    {

        $destinationPath = public_path('/files');
        $files = $request->file('file');
        $file_name = $files->getClientOriginalName();
//        $file_extension = $files->getClientOriginalExtension();
        $files->move($destinationPath, $file_name);
        return view('FileUpload.file5')->with('success', true)->with('link', $file_name);

    }

    public function index2()
    {
        return view('FileUpload.file2');
    }

    public function index3()
    {
        return view('FileUpload.file3');
    }

    public function index4()
    {
        return view('FileUpload.file4');
    }

    public function index5()
    {
        return view('FileUpload.file5');
    }
}
