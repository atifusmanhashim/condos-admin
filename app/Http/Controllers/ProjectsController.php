<?php

namespace App\Http\Controllers;

// Model Declaration
use App\Models\Projects;

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

class ProjectsController extends Controller
{
    /**
     * Default Pagination
     */
    public function pagination_recs()
    {
        $pagination_recs=12;
        return $pagination_recs;
    }

    // Projects Page
    public function index(Request $request)
    {
        try {

            if (Auth::check())
            {
                $user=Auth::user();
                Auth::login($user);
                $access_token = $user->createToken("env('TOKEN_NAME')")->accessToken;
                $request->session()->put('user_name',$user->name);

                $default_pagination=$this->pagination_recs();
                if (!empty($request->req_recs)) {
                    $req_recs=$request->req_recs;
                } else {
                    $req_recs=$default_pagination;
                }

                $projects_lst_recs=[];
                $projects_query=Projects::select('_id',
                                    'project_url',
                                    'project_id',
                                    'project_stub',
                                    'project_image',
                                    'information',
                                    'description',
                                    'project_information',
                                    'project_attributes',
                                    'units',
                                    'unit_mix',
                                    'ground_floor_area',
                                    'parking',
                                    'access_and_services',
                                    'minimum_setbacks',
                                    'applications',
                                    'permits',
                                    'forums',
                                    'is_featured')
                                    ->get();

                $project_i=0;
                foreach($projects_query as $project)
                {
                    $projects_lst_recs[$project_i]=$project;

                    $project_i+=1;
                }

                $projects_lst_recs=collect($projects_lst_recs);
                $projects_lst_recs=$projects_lst_recs->paginate($req_recs);
                return view('projects',compact('projects_lst_recs'))->render();

            } else {
                return Redirect('/login');
            }
        } catch (Exception $e) {
            $error_code="A001";
            $error_msg="Error in Root: ".$error_code." ".$e->getmessage().". Please check your process or report to ".env('APP_NAME')." ";
            return view('error',compact('error_msg'))->with('alert-danger', $error_msg);
        }

    }

    public function projects_lst(Request $request)
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

            $default_pagination=$this->pagination_recs();
            if (!empty($request->req_recs)) {
                $req_recs=$request->req_recs;
            } else {
                $req_recs=$default_pagination;
            }

            if (Auth::guard('api')->check())
            {

                $projects_lst_recs=[];
                $projects_query=Projects::select('_id',
                                    'project_url',
                                    'project_id',
                                    'project_stub',
                                    'project_image',
                                    'information',
                                    'description',
                                    'project_information',
                                    'project_attributes',
                                    'units',
                                    'unit_mix',
                                    'ground_floor_area',
                                    'parking',
                                    'access_and_services',
                                    'minimum_setbacks',
                                    'applications',
                                    'permits',
                                    'forums',
                                    'is_featured')
                                    ->get();

                if (count($projects_query)>=1)
                {
                    $total_recs=count($projects_query);
        
                    $projectslst=$projects_query->paginate($req_recs);
    
                    $total_pages=$projectslst->lastPage();
    
                    $current_page=$projectslst->currentPage();
    
                    $items_per_page=$projectslst->perPage();

                    $res=[];
                    if ($current_page<=$total_pages) {
                        foreach ($projectslst  as $key => $value) {
                                $res[] = $value;
                        }
                    } else {
                        $res=[];
                    }
                    $status_code=200;
                    $data=[
                        "msg"=>"success",
                        "status"=>$status_code,
                        "total_recs"=>$total_recs,
                        "total_pages"=>$total_pages,
                        "starting_page"=>1,
                        "last_page"=>$total_pages,
                        "current_page"=>$current_page,
                        "records_per_page"=>$items_per_page,
                        'data'=>$res
                    ];
    
                } else {
                    $res=[];
                    $status_code=200;
                    $data=[
                        "msg"=>"success",
                        "status"=>$status_code,
                        "total_recs"=>count($projects_query),
                        "total_pages"=>0,
                        "starting_page"=>1,
                        "last_page"=>0,
                        "current_page"=>1,
                        "records_per_page"=>$req_recs,
                        'data'=>$res
                    ];
                }
                // $project_i=0;
                // foreach($projects_query as $project)
                // {
                //     $projects_lst_recs[$project_i]=$project;

                //     $project_i+=1;
                // }




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
            $error_message="Projects Listing API Crash. Error: ".$e->getmessage();
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
}