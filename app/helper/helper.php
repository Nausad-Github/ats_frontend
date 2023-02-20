<?php 

function get_career_basic($cloud_id){
    try {
        $career_basic = App\Models\TicCareerBasic::where('cloud_id', $cloud_id)->first();
        if($career_basic == ""){
            $career_basic = App\Models\TicCareerBasic::where('cloud_id', 0)->first();
        }
        return $career_basic;
    } catch (\Exception $e) {
        return ($e->getMessage());
    }
}

function get_cloud_jobs($cloud_id){
    try {
        $career_basic = App\Models\TicCareerBasic::where('cloud_id', $cloud_id)->first();
        if($career_basic == ""){
            $career_basic = App\Models\TicCareerBasic::where('cloud_id', 0)->first();
        }
        return $career_basic;
    } catch (\Exception $e) {
        return ($e->getMessage());
    } 
}

function get_all_jobs($cloud_id)
{
    $all_jobs = App\Models\TicJobs::where('cloud_id', $cloud_id)->where('job_status', "Active")->get();
    return $all_jobs;
}

function get_state_location()
{
    $state = DB::table('z_config_city')
        // ->where('z_config_city.parent_state_id', 0)
        // ->where('z_config_city.parent_country_id', "!=", 0)
        ->get();
    return $state;
}

?>