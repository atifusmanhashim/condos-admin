<?php

namespace App\Http\Controllers;

//Model Declaration
use App\Models\Builders;

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


class BuilderController extends Controller
{
    public function builders_lst (Request $request)
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

                $builders_lst_recs=[];
                $builders_query=Builders::select('_id as id',
                                    'name',
                                    'description',
                                    'logo_image')
                                    ->where('builder_isactive','=',true)
                                    ->get();

                $builders_i=0;
                foreach($builders_query as $builder)
                {
                    $builders_lst_recs[$builders_i]=$builder;

                    $builders_i+=1;
                }
                $status_code=200;
                $data=[
                    "msg"=>"success",
                    "status"=>$status_code,
                    'data'=>$builders_lst_recs
                    
                ];
                return response()->json($data, $status_code);



            } else {
                $status_code=401;
                $data=[
                    "msg"=>"You are not authorised",
                    "success"=>false,
                    "status"=>$status_code
                ];
                return response()->json($data, $status_code);

            }
        } catch (Exception $e) {
            $error_message="Builders Listing API Crash. Error: ".$e->getmessage();
            //$error_message=$e->getmessage();
            $status_code=400;
            $data=[
                "msg"=>$error_message,
                "success"=>false,
                "status"=>$status_code,
            ];
            return response()->json($data,$status_code);

        }

    }

    //Creation
    public function create_builder(Request $request)
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
                $validator = Validator::make($request->all(), [
                    'name'=>'required|string|unique:builders,name',
                    'description'=>'string',
                ]);

                if ($validator->fails()) {
                    $status_code=400;
                    $data=[
                        "msg"=>implode(",",$validator->messages()->all()),
                        "status"=>$status_code
                    ];
                    return response() -> json($data, $status_code);
                } else {

                    $builder_object=Builders::create([
                        'name'=>$request->name,
                        'description'=>$request->description,
                        'logo_image'=>"",
                        'builder_isactive'=>true
                    ]);
                    $status_code=200;
                    $data=[
                        "msg"=>"Builder Record created successfully!",
                        "success"=>true,
                        "status"=>$status_code,
                        "data"=> $builder_object
                        
                    ];
                    return response() -> json($data, $status_code);
                }



            } else {
                $status_code=401;
                $data=[
                    "msg"=>"You are not authorised",
                    "success"=>false,
                    "status"=>$status_code
                ];
                return response()->json($data, $status_code);

            }
        } catch (Exception $e) {
            $error_message="Add Builder API Crash. Error: ".$e->getmessage();
            //$error_message=$e->getmessage();
            $status_code=400;
            $data=[
                "msg"=>$error_message,
                "success"=>false,
                "status"=>$status_code,
            ];
            return response()->json($data,$status_code);

        }

    }

    //Deletion
    public function delete_builder(Request $request)
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
                $validator = Validator::make($request->all(), [
                    'builder_id'=>'required|string|exists:builders,_id',
                ]);
                $builder_id=$request->builder_id;
                if ($validator->fails()) {
                    $status_code=400;
                    $data=[
                        "msg"=>implode(",",$validator->messages()->all()),
                        "status"=>$status_code
                    ];
                    return response() -> json($data, $status_code);
                } else {

                    $builder_object=Builders::where('_id','=',$builder_id)->where('builder_isactive','=',true)->update(['builder_isactive'=>false]);
                    $status_code=200;
                    $data=[
                        "msg"=>"Builder Record deleted",
                        "success"=>true,
                        "status"=>$status_code,
                        "data"=> []
                        
                    ];
                    return response() -> json($data, $status_code);
                }



            } else {
                $status_code=401;
                $data=[
                    "msg"=>"You are not authorised",
                    "success"=>false,
                    "status"=>$status_code
                ];
                return response()->json($data, $status_code);

            }
        } catch (Exception $e) {
            $error_message="Add Builder API Crash. Error: ".$e->getmessage();
            //$error_message=$e->getmessage();
            $status_code=400;
            $data=[
                "msg"=>$error_message,
                "success"=>false,
                "status"=>$status_code,
            ];
            return response()->json($data,$status_code);

        }

    }

    //Updation
    public function update_builder(Request $request)
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
                $validator = Validator::make($request->all(), [
                    'builder_id'=>'required|string|exists:builders,_id',
                    'name'=>'required|string'
                ]);

                $builder_id=$request->builder_id;
                if ($validator->fails()) {
                    $status_code=400;
                    $data=[
                        "msg"=>implode(",",$validator->messages()->all()),
                        "status"=>$status_code
                    ];
                    return response() -> json($data, $status_code);
                } else {

                    $name=$request->name;
                    $description=$request->description;
                    $logo_image="";

                    $builder_update_query=Builders::where('_id','=',$builder_id)
                                ->where('builder_isactive','=',true)
                                ->update(['name'=>$name,'description'=>$description,'logo_image'=>$logo_image]);

                    $builder_object=Builders::find($builder_id);
                    $status_code=200;
                    $data=[
                        "msg"=>"Builder Record Updated",
                        "success"=>true,
                        "status"=>$status_code,
                        "data"=> $builder_object
                        
                    ];
                    return response() -> json($data, $status_code);
                }



            } else {
                $status_code=401;
                $data=[
                    "msg"=>"You are not authorised",
                    "success"=>false,
                    "status"=>$status_code
                ];
                return response()->json($data, $status_code);

            }
        } catch (Exception $e) {
            $error_message="Add Builder API Crash. Error: ".$e->getmessage();
            //$error_message=$e->getmessage();
            $status_code=400;
            $data=[
                "msg"=>$error_message,
                "success"=>false,
                "status"=>$status_code,
            ];
            return response()->json($data,$status_code);

        }        
    }
    //Serving New Builder Form
    public function addbuilder(Request $request)
    {


        try {

            if (Auth::check())
            {
                $user=Auth::user();
                Auth::login($user);
                $access_token = $user->createToken("env('TOKEN_NAME')")->accessToken;
                $request->session()->put('user_name',$user->name);

                return view('add-new-builder');
                

            } else {
                return Redirect('/login');
            }
        } catch (Exception $e) {
            $error_code="A001";
            $error_msg="Error in Root: ".$error_code." ".$e->getmessage().". Please check your process or report to ".env('APP_NAME')." ";
            return view('error',compact('error_msg'))->with('alert-danger', $error_msg);
        }

    }

    //Builder Page
    public function index(Request $request)
    {


        try {

            if (Auth::check())
            {
                $user=Auth::user();
                Auth::login($user);
                $access_token = $user->createToken("env('TOKEN_NAME')")->accessToken;
                $request->session()->put('user_name',$user->name);

                return view('builders');
                

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