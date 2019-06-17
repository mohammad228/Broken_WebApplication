<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/admin-info','UserController@index');
Route::get('/dashboard','UserController@index');
Route::get('/login','HomeController@login');
Route::post('/login','HomeController@loginCheck');
Route::get('/register','HomeController@register');
Route::post('/register','HomeController@registerSubmit');

/*for xss */
Route::get('/xss','XssController@index');
Route::post('/xss-reflected','XssController@reflected');
Route::post('/xss-store','XssController@store');
/*  END  */

/*SQL INJECTION */
Route::get('sqli','SqlController@index');
Route::post('sqli','SqlController@checkPassword');
/*  END  */

/* OpenRedirect */
Route::get('open-redirect','OpenRedirectController@index');
Route::get('open-redirect/home','OpenRedirectController@redirect2');
Route::post('open-redirect','OpenRedirectController@redirect');
/*   END   */

/* EAR */
Route::get('ear','EarController@index');
Route::post('ear','EarController@ear');
/*   END   */

/*    captcha 1  */
Route::get('captcha','CaptchaController@index');
Route::get('captcha-load','CaptchaController@generate');
Route::post('captcha','CaptchaController@check');

/*        captcha 2          */

//Route::get('captcha2','CaptchaController@index'); not
//Route::get('captcha-load','CaptchaController@generate');
Route::post('captcha2','CaptchaController@vulnCheck');

/*   captcha 3 (Safe) */

Route::get('captcha-safe','CaptchaController@indexSecond');
Route::get('captcha-load','CaptchaController@generate');
Route::post('captcha3','CaptchaController@checkSafe');
/*    END      */

/*        file uploadssssssssssss          */

/*   1111111111111111111111111111111*/
Route::get('file_upload','FileUploadController@index');
Route::post('file_upload','FileUploadController@upload');
/* 222222222222222222222222222222222 */

Route::get('file_upload_2','FileUploadController@index2');
/* 3333333333333333333333333333333333333 */

Route::get('file_upload_3','FileUploadController@index3');

/* 444444444444444444444444444444444444444444444444444444444444444444444444444444 */
Route::get('file_upload_4','FileUploadController@index4');

/* 5555555555555555555555555555555555555555555555555 */
Route::get('file_upload_5','FileUploadController@index5');
Route::post('file_upload_5','FileUploadController@upload_logic');
