<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CareerController extends Controller
{
    public function index(){
        try {
            return view('frontend/pages/home');
        } catch (\Throwable $th) {
            return ($th->getMessage());
        }
    }

    public function about(){
        try {
            return view('frontend/pages/about');
        } catch (\Throwable $th) {
            return ($th->getMessage());
        }
    }

    public function privacyPolicy(){
        try {
            return view('frontend/pages/privacy_policy');
        } catch (\Throwable $th) {
            return ($th->getMessage());
        }
    }

    public function termsConditions(){
        try {
            return view('frontend/pages/terms_conditions');
        } catch (\Throwable $th) {
            return ($th->getMessage());
        }
    }

    public function security(){
        try {
            return view('frontend/pages/security');
        } catch (\Throwable $th) {
            return ($th->getMessage());
        }
    }

    public function filterJob(request $request){
        try {
            $query = DB::table('tic_company_jobs');
            if ($request->keyword != "")
                $query->where('job_title', 'like', '%' . $request->keyword . '%');
            if ($request->location != "")
                $query->where('job_location', 'like', '%' . $request->location . '%');
                $result = $query->get();
                if($result->count() > 0){
                    $job_html = "";
                    foreach ($result as $key => $value) {
                        $job_html.='
                            <div class="col-lg-12">
                                <div class="tic-job-card">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-8 col-md-12 col-sm-12">
                                    <div class="d-flex align-content-center">
                                        <div class="">
                                        <img src="'. url("/") .'/frontends/img/job.png" class="img-fluid" alt="tic job">
                                        </div>
                                        <div class="job-content">
                                        <h6>'. $value->job_title .'</h6>
                                        <ul class="mt-2 d-flex">
                                            <li class="me-3">
                                            <p class="font-xs d-flex">
                                                <img src="'. url("/") .'/frontends/img/industry.svg" alt="job" class="me-2">
                                                <span>'. $value->job_emp_type .'</span>
                                            </p>
                                            </li>
                                            <li>
                                            <p class="font-xs d-flex">
                                                <img src="'. url("/") .'/frontends/img/icon-location-2.svg" alt="job" class="me-2">
                                                <span>'. $value->job_location .'</span>
                                            </p>
                                            </li>
                                        </ul>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-12 col-sm-12 right-job-btn">
                                    <a href="view-job.php/{{ $get_all_job->job_id }}" class="btn btn-apply-now">Apply now</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                        ';
                    }
                    return response()->json([
                        "code" => 200,
                        "message" => " Total " . $result->count() . " Jobs Found",
                        "data" => $job_html,
                    ]);
                }else{
                    return response()->json([
                        "code" => 404,
                        "message" => "Search Result Not Found !"
                    ]);
                } 
        } catch (\Throwable $th) {
            return ($th->getMessage());
        }
    }
    

}
