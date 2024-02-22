<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadDataFileController extends Controller
{
    public function index(Request $request)
    {


        try {

            return view('upload-data-file');
            // if (Auth::check())
            // {
            //     $user=Auth::user();
            //     Auth::login($user);
            //     $access_token = $user->createToken('env('TOKEN_NAME')')->accessToken;
            //     $request->session()->put('user_name',$user->name);

                

            // } else {
            //     return Redirect('/login');
            // }
        } catch (Exception $e) {
            $error_code="A001";
            $error_msg="Error in Root: ".$error_code." ".$e->getmessage().". Please check your process or report to ".env('APP_NAME')." ";
            return view('error',compact('error_msg'))->with('alert-danger', $error_msg);
        }

    }
}