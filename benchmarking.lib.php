i<?php

//Moodle Course benchmarking function library.

//ini_set('display_errors',1);
//error_reporting(E_ALL);

function get_num_item($item,$course) {
    $result = count_records($item,'course',$course);
    return $result;
}

function calc_score($course) {
    //$modules = array('assignment','chat','event','forum','glossary','label');
    include 'config.php';
    $sum = 0;
    foreach ($modules as $module => $weighting) {
        $score = get_num_item($module,$course);
        $sum += $score * $weighting;
    }
    return $sum;
}

function get_benchmark_level($score) {
    include 'config.php';
    $benchmark = "";
    foreach ($levels as $level => $points) {
        if ($score >= $points) {
            $benchmark = $level;
        }
    }
    return $benchmark;
}


?>
