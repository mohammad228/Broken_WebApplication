<?php

namespace App\Http\Controllers;

use App\Http\Middleware\AccessControl;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Validation\Rules\Exists;
use Session;

class CaptchaController extends Controller
{

    public function __construct()
    {
        $this->middleware('accessControl');
    }

    public function index()
    {

        return view('Captcha.captcha');

    }

    public function indexSecond()
    {

        Session::forget('captcha');

        return view('Captcha.captchaSafe');

    }

    public function generate()
    {
        $random_alpha = md5(rand());
        $captcha_code = substr($random_alpha, 0, 6);
        Session::put('captcha', $captcha_code);
        $target_layer = imagecreatetruecolor(70, 30);
        $captcha_background = imagecolorallocate($target_layer, 255, 160, 119);
        imagefill($target_layer, 0, 0, $captcha_background);
        $captcha_text_color = imagecolorallocate($target_layer, 0, 0, 0);
        imagestring($target_layer, 5, 5, 5, $captcha_code, $captcha_text_color);
        header("Content-type: image/jpeg");
        imagejpeg($target_layer);
        imagedestroy($target_layer);
    }

    public function check(Request $request)
    {


        if (count($request) > 0) {
            if ($request["captcha_code"] === Session::get('captcha')) {
                Session::flush('captcha');
                return redirect();
                dd("Your message received successfully");

            } else {
                Session::flush();
                return redirect('captcha-safe');
                dd("Incorrect Captcha Code");

            }
        }
    }

    public function checkSafe(Request $request)
    {


        if (count($request) > 0) {
            if ($request["captcha_code"] === Session::get('captcha')) {

                Session::flush('captcha');

                return redirect();
                dd("Your message received successfully");

            } else {
                Session::flush();
                return redirect('captcha-safe');
                dd("Incorrect Captcha Code");

            }
        }
    }


    public function vulnCheck(Request $request)
    {
        $input = $request->all();
        if ($request->has('captcha_code')) {
            if (is_null($input['captcha_code'])) {
                dd("Captcha is null");
            }
        }
        if (isset($input['captcha_code'])) {
            if (is_null($input['captcha_code'])) {
                dd("Captcha is null");
            }
            if ($request->has('captcha_code') === Session::get('captcha')) {
                dd("Your message received successfully");

            } else {
                dd("Incorrect Captcha Code");
            }
        }

        if (isset($input['userName']) & isset($input['userEmail']) & !isset($input['captcha_code'])) {


            if ($input['userName'] === "mohammad" & $input['userEmail'] === "123") {
                dd("success submit");
            } else {

                if (Session::has('flag')) {

                    $flag = Session::get('flag');
                    $flag = $flag + 1;
                    Session::put('flag', $flag);

                    if ($flag >= 3) {

                        return redirect('captcha')->with('captcha', "test");
                    }
                    return back();
                } else {
                    $flag = 0;
                    Session::put('flag', $flag);
                    return back();

                }

            }
        }
    }


}
