<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Exception;
use Redirect;

class HomeController extends Controller
{
   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth:api');
    // }

    public function index(Request $request)
    {


        try {
            
            // $data=[];
  
            // return redirect('/dashboard');
          
            if (Auth::check())
            {
                $user=Auth::user();
                Auth::login($user);
                $access_token = $user->createToken(env('TOKEN_NAME'))->accessToken;
                $request->session()->put('user_name',$user->name);

                

            } else {
                return Redirect('/login');
            }
        } catch (Exception $e) {
            $error_code="A001";
            $error_msg="Error in Root: ".$error_code." ".$e->getmessage().". Please check your process or report to ".env('APP_NAME')." ";
            return view('error',compact('error_msg'))->with('alert-danger', $error_msg);
        }

    }

      //User Dashboard
      public function dashboard(Request $request)
      {
  
          try {
            // $data=[];
  
            // return view('index',compact('data'));
            if (Auth::check())
            {
                $user=Auth::user();
                Auth::login($user);
                
                 
                $data=[];
  
                return view('index',compact('data'));
  
                 
            } else {
                return Redirect('/login');
            }
        } catch (Exception $e) {
              $error_code="A002";
              $error_msg="Error in Serving Dashboard: ".$error_code." ".$e->getmessage().". Please check your process or report to ".env('APP_NAME')." ";
              return view('error',compact('error_msg'))->with('alert-danger', $error_msg);
        }
      }
  
}