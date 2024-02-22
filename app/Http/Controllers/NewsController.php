<?php

namespace App\Http\Controllers;

// Model Declaration
use App\Models\News;

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

class NewsController extends Controller
{

    //Serving New Input Form
    public function add_news(Request $request)
    {


        try {

            if (Auth::check())
            {
                $user=Auth::user();
                Auth::login($user);
                $access_token = $user->createToken("env('TOKEN_NAME')")->accessToken;
                $request->session()->put('user_name',$user->name);
                return view('add-news');

                

            } else {
                return Redirect('/login');
            }
        } catch (Exception $e) {
            $error_code="A001";
            $error_msg="Error in Root: ".$error_code." ".$e->getmessage().". Please check your process or report to ".env('APP_NAME')." ";
            return view('error',compact('error_msg'))->with('alert-danger', $error_msg);
        }

    }

    // News Listing API
    public function news_lst (Request $request)
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

                $news_lst_recs=[];
                $news_query=News::select('_id as id',
                                    'title',
                                    'image',
                                    'summary')
                                    ->get();

                $news_i=0;
                foreach($news_query as $news)
                {
                    $news_lst_recs[$news_i]=$news;

                    $news_i+=1;
                }
                $status_code=200;
                $data=[
                    "msg"=>"success",
                    "status"=>$status_code,
                    'data'=>$news_lst_recs
                    
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
            $error_message="News API Listing Crash. Error: ".$e->getmessage();
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

    public function index(Request $request)
    {


        try {

           // 
            if (Auth::check())
            {
                $user=Auth::user();
                Auth::login($user);
                $access_token = $user->createToken("env('TOKEN_NAME')")->accessToken;
                $request->session()->put('user_name',$user->name);

                $news_lst_recs=[];
                $news_query=News::select('_id as id',
                                    'title',
                                    'image',
                                    'news_date',
                                    'summary')
                                    ->where('isactive','=',true)
                                    ->get();

                $news_i=0;
                foreach($news_query as $news)
                {
                    $news_lst_recs[$news_i]=$news;

                    $news_i+=1;
                }
                $news_lst_recs=collect($news_lst_recs);
                return view('news',compact('news_lst_recs'));
                

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