<?php


function check_date(){

    $CI	=&	get_instance();
    $CI->load->database();
    $ll = date("Y",strtotime("next year"));
    $now = date("Y-m-d",strtotime("Now"));
    $year = date("Y",strtotime("Now"));
    $jan = date("m-d",strtotime("January 1"));
    $feb = date("m-d",strtotime("February 1"));
    $mar = date("m-d",strtotime("March 1"));

    if($now > "$year-$jan" && $now < "$year-$feb"){
        $query = $CI->db->count_all_results('fee')->get_where('fee',[
            'date >' => "$year-$jan",
            'date <' => "$year-$feb"
        ])->result_array();

        return $query;

    }
    if($now > "$year-$feb" && $now < "$year-$mar"){
        $query = $CI->db->where('date >',"$year-$feb")
                        ->where('date <' , "$year-$mar")
                        ->count_all_results('fee');

        return $query;
    }

}

function get_amount($data){
    $CI	=&	get_instance();
    $CI->load->database();
    $query = $CI->db->get_where('fee_structure',['class_id' => $data])
    ->row()->amount;
    return $query;
}

// $ll = date("Y",strtotime("next year"));
// $nwww = date("Y-m-d",strtotime("Now"));
// $nww = date("Y",strtotime("Now"));
// $jan = date("m-d",strtotime("January 1"));
// $feb = date("m-d",strtotime("February 1"));
// $mar = date("m-d",strtotime("March 1"));
// $apr = date("m-d",strtotime("April 1"));
// $may = date("m-d",strtotime("May 1"));
// $jun = date("m-d",strtotime("June 1"));
// $jul = date("m-d",strtotime("July 1"));
// $aug = date("m-d",strtotime("August 1"));
// $sep = date("m-d",strtotime("September 1"));
// $oct = date("m-d",strtotime("October 1"));
// $nov = date("m-d",strtotime("November 1"));
// $dec = date("m-d",strtotime("December 1"));