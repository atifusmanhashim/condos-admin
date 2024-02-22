<?php

namespace App\Http\Controllers;

//Model Declaration
use App\Models\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

#Use for Validation
use Illuminate\Support\Facades\Validator;

#Use for Authentication
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use Redirect;

use Exception;


class AgentController extends Controller
{
    public function index(Request $request)
    {


        try {

            if (Auth::check())
            {
                $user=Auth::user();
                Auth::login($user);
                $access_token = $user->createToken("env('TOKEN_NAME')")->accessToken;
                $request->session()->put('user_name',$user->name);

                return view('agents');
                

            } else {
                return Redirect('/login');
            }
        } catch (Exception $e) {
            $error_code="A001";
            $error_msg="Error in Root: ".$error_code." ".$e->getmessage().". Please check your process or report to ".env('APP_NAME')." ";
            return view('error',compact('error_msg'))->with('alert-danger', $error_msg);
        }

    }
}