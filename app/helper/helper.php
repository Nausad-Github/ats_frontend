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


function get_term_conditions($cloud_id){
    try {
        $get_term_conditions = App\Models\TicCareerTermCondition::where('cloud_id', $cloud_id)->first();
        if($get_term_conditions == ""){
            $get_term_conditions = App\Models\TicCareerTermCondition::where('cloud_id', 0)->first();
        }
        return $get_term_conditions;
    } catch (\Exception $e) {
        return ($e->getMessage());
    }
}

// function get_cloud_jobs($cloud_id){
//     try {
//         $career_basic = App\Models\TicCareerBasic::where('cloud_id', $cloud_id)->first();
//         if($career_basic == ""){
//             $career_basic = App\Models\TicCareerBasic::where('cloud_id', 0)->first();
//         }
//         return $career_basic;
//     } catch (\Exception $e) {
//         return ($e->getMessage());
//     } 
// }

function get_all_jobs($cloud_id)
{
    $all_jobs = App\Models\TicJobs::where('cloud_id', $cloud_id)->where('job_status', "Active")->get();
    return $all_jobs;
}

function get_single_job($cloud_id, $job_id)
{
    $all_jobs = App\Models\TicJobs::where('cloud_id', $cloud_id)
                        ->where('job_status', "Active")
                        ->where('job_id', '=', $job_id)
                        ->first();
    return $all_jobs;
}

function find_age_ago($date)
{
    $etime = time() - $date;

    if ($etime < 1) {
        return 'less than a min ago';
    }

    $a = array(
        12 * 30 * 24 * 60 * 60  =>  'year',
        30 * 24 * 60 * 60       =>  'month',
        24 * 60 * 60            =>  'day',
        60 * 60             =>  'hour',
        60                  =>  'minute',
        1                   =>  'second'
    );

    foreach ($a as $secs => $str) {
        $d = $etime / $secs;

        if ($d >= 1) {
            $r = round($d);
            return $r . ' ' . $str . ($r > 1 ? 's' : '') . ' ago';
        }
    }
}

function get_related_jobs($cloud_id, $job_id){
    $related_jobs = App\Models\TicJobs::where('cloud_id', $cloud_id)
                                ->where('job_id', '!=', $job_id)
                                ->where('job_status', "Active")
                                ->paginate(3);
    return $related_jobs;
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