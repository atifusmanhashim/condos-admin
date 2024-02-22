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


class ProjectDataTableController extends Controller
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

                $projects_lst=[];
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
                $p_i=0;
                foreach($projects_query as $project)
                {
                   
                    $projects_lst[$p_i]=$project;
                    $p_i+=1;


                }
                return view('project-data-table',compact('projects_lst'));
                

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