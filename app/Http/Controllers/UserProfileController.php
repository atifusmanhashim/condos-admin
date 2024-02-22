<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserRole;

use Illuminate\Http\Request;

use Illuminate\Support\Str;
#Use for Authentication

use Illuminate\Support\Facades\Auth;

#Use for Validation
use Illuminate\Support\Facades\Validator;


//Use for Try Catch
use Exception;

use Redirect;





class UserProfileController extends Controller
{
    public function index(Request $request)
    {


        try {

            
            if (Auth::check())
            {
                $user=Auth::user();
                Auth::login($user);

                $data=$user;


                $user_roles=[];
                $user_roles=UserRole::select('role_id','name')->orderby('role_id')->get();
                $user_roles=$user_roles->toArray();

                return view('user-profile',compact('data','user_roles'));
                

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