<?php

namespace App\Http\Controllers;

use App\Models\AppUser;

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

class AppUserController extends Controller
{
    public function app_users_lst (Request $request)
    {
        try {

            $user_token=$request->header('Authorization', ''); // Taking User Token from Authorization header
            if (Str::startsWith($user_token, 'Bearer ')) {   // If authorization type is Bearer
                $user_token=Str::substr($user_token, 7);
            } elseif (Str::startsWith($user_token, 'Basic ')) {  // If authorization type is Basic
                $user_token=Str::substr($user_token, 6);
            } else {
                $user_token=null;
            }
            if (Auth::guard('api')->check())
            {

                $admin_users_obj=AppUser::all();


                foreach ($admin_users_obj  as $key => $value) {
                    $res[] = $value;
                }




                $status_code=200;
                $data=[
                    "msg"=>"success",
                    "status"=>$status_code,
                    "data"=>$res
                ];
                return response() -> json($data, $status_code);

            } else {
                $status_code=401;
                $data=[
                    "msg"=>"You are not authorised",
                    "success"=>false,
                    "status"=>401
                ];
                return response()->json($data, $status_code);

            }


           
               
        } catch (Exception $e) {
            $error_message="List of App Users API Crash. Error: ".$e->getmessage();
            //$error_message=$e->getmessage();
            $status_code=400;
            $data=[
                "msg"=>$error_message,
                "status"=>$status_code,
            ];
            return response()->json($data,$status_code);

        }

    }

}
