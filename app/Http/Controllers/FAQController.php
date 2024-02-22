<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\FAQ;

use Illuminate\Support\Str;

#Use for Validation
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Auth;

use Exception;

use Redirect;

class FAQController extends Controller
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

                $faq_obj=FAQ::where('faq_isactive','=',true)->get();


                foreach ($faq_obj  as $key => $value) {
                    $faq_recs[] = $value;
                }
    
    
                return view('faq',compact('faq_recs'));
                

            } else {
                return Redirect('/login');
            }
        } catch (Exception $e) {
            $error_code="A001";
            $error_msg="Error in FAQ Section: ".$error_code." ".$e->getmessage().". Please check your process or report to ".env('APP_NAME')." ";
            return view('error',compact('error_msg'))->with('alert-danger', $error_msg);
        }

    }

    //Serving FAQ Form
    public function add_faq(Request $request)
    {

        //FAQ Dashboard
        try {

            if (Auth::check())
            {
                $user=Auth::user();
                Auth::login($user);
                $access_token = $user->createToken("env('TOKEN_NAME')")->accessToken;
                $request->session()->put('user_name',$user->name);
                return view('add-new-question');
                // $vendor_type=VendorType::select('vendor_type_id','vendor_type_name')->where('vendor_type_isactive','=',true)->get();

                return view('addfaq');
            } else {
                return Redirect('login');
            }
        } catch (Exception $e) {
            $error_code="A001";
            $error_msg="Error in Root: ".$error_code." ".$e->getmessage().". Please check your process or report to ".env('APP_NAME')." ";
            return view('error',compact('error_msg'))->with('alert-danger', $error_msg);
        }

    }

    //Add FAQ Api
    public function faq_insert(Request $request)
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
                    'question'=>'required|string',
                    'answer'=>'required|string'
                ]);

                if ($validator->fails()) {
                    $status_code=400;
                    $data=[
                        "msg"=>implode(",",$validator->messages()->all()),
                        "status"=>$status_code
                    ];
                    return response() -> json($data, $status_code);
                } else {

                    $faq_object=FAQ::create([
                        'question'=>$request->question,
                        'answer'=>$request->answer,
                        'faq_isactive'=>true
                    ]);
                    $status_code=200;
                    $data=[
                        "msg"=>"Added new FAQ successfully!",
                        "success"=>true,
                        "status"=>$status_code,
                        "data"=> $faq_object
                        
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
            $error_message="Add FAQ API Crash. Error: ".$e->getmessage();
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

    //Deletion FAQ API making FAQ_isactive=False
    public function delete_faq(Request $request)
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
                    'id'=>'required|exists:faq,_id'
                ]);

                if ($validator->fails()) {
                    $status_code=400;
                    $data=[
                        "msg"=>implode(",",$validator->messages()->all()),
                        "status"=>$status_code
                    ];
                    return response() -> json($data, $status_code);
                } else {

                    $faq_object=FAQ::where('_id','=',$request->id)->where('faq_isactive','=',true)->update(['faq_isactive'=>false]);
                    $status_code=200;
                    $data=[
                        "msg"=>"Deleted FAQ Successfully!",
                        "success"=>true,
                        "status"=>$status_code,
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
            $error_message="Add FAQ API Crash. Error: ".$e->getmessage();
            //$error_message=$e->getmessage();
            $status_code=400;
            $data=[
                "msg"=>$error_message,
                "status"=>$status_code,
            ];
            return response()->json($data,$status_code);

        }
    }

    //Getting All FAQs in Rest API
    public function get_faqs(Request $request)
    {
        try {
            $faq_obj=FAQ::where('faq_isactive','=',true)->get();


            foreach ($faq_obj  as $key => $value) {
                $res[] = $value;
            }




            $status_code=200;
            $data=[
                "msg"=>"success",
                "status"=>$status_code,
                "data"=>$res
            ];
            return response() -> json($data, $status_code);




           
               
        } catch (Exception $e) {
            $error_message="List of FAQs API Crash. Error: ".$e->getmessage();
            //$error_message=$e->getmessage();
            $status_code=400;
            $data=[
                "msg"=>$error_message,
                "status"=>$status_code,
            ];
            return response()->json($data,$status_code);

        }
    }

    //Getting FAQ by Selected ID for Edit / Delete
    public function get_faq_by_id(Request $request, $id)
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
                $faq_obj=FAQ::where('_id', '=', $id)->first();


                $status_code=200;
                $data=[
                    "response"=>[
                        "msg"=>"success",
                        "success"=>true,
                        "status"=>$status_code,
                        "data"=>$faq_obj
                    ]
                ];
                return response() -> json($data, $status_code);




            } else {
                $status_code=401;
                $data=[
                    "response"=>[
                        "msg"=>"You are not authorised",
                        "success"=>false,
                        "status"=>401
                    ]
                ];
                return response()->json($data, $status_code);

            }
        } catch (Exception $e) {
            $error_message="List of FAQs API Crash. Error: ".$e->getmessage();
            //$error_message=$e->getmessage();
            $status_code=400;
            $data=[
                "response"=>[
                    "msg"=>$error_message,
                    "status"=>$status_code,
                ]
            ];
            return response()->json($data,$status_code);

        }
    }

    //Update FAQ API
    public function update_faq(Request $request)
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
                    'id'=>'required|exists:faq,_id',
                    'question'=>'required|string',
                    'answer'=>'required|string'
                ]);

                if ($validator->fails()) {
                    $status_code=400;
                    $data=[
                        "msg"=>implode(",",$validator->messages()->all()),
                        "status"=>$status_code
                    ];
                    return response() -> json($data, $status_code);
                } else {

                    $faq_object=FAQ::where('_id','=',$request->id)->where('faq_isactive','=',true)->update(['question'=>$request->question, 'answer'=>$request->answer]);
                    $status_code=200;
                    $data=[
                        "msg"=>"Updated FAQ Successfully!",
                        "status"=>$status_code,
                        "data"=> $faq_object
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
            $error_message="Add FAQ API Crash. Error: ".$e->getmessage();
            //$error_message=$e->getmessage();
            $status_code=400;
            $data=[
                "response"=>[
                    "msg"=>$error_message,
                    "status"=>$status_code,
                ]
            ];
            return response()->json($data,$status_code);

        }
    }

    //Serving FAQ Edit Form
    public function editfaq($id)
    {

        //User Dashboard
        try {

            if (Auth::check())
            {
                $user=Auth::user();
                Auth::login($user);
                $access_token = $user->createToken("env('TOKEN_NAME')")->accessToken;

                $sel_faq_id=$id;

                $faq=FAQ::where('_id','=',$sel_faq_id)->first();

                // $vendor_type=VendorType::select('vendor_type_id','vendor_type_name')->where('vendor_type_isactive','=',true)->get();

                return view('editfaq',compact('sel_faq_id','faq'));
            } else {
                return Redirect('login');
            }
        } catch (Exception $e) {
            $error_code="A001";
            $error_msg="Error in Root: ".$error_code." ".$e->getmessage().". Please check your process or report to ".env('APP_NAME')." ";
            return view('error',compact('error_msg'))->with('alert-danger', $error_msg);
        }

    }

}