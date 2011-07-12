<?php //$Id: block_benchmarking.php,v 0.0.0.1, jamess, 02/06/2011 17:!2

include 'benchmarking.lib.php';

//ini_set('display_errors',1);
//error_reporting(E_ALL);

class block_benchmarking extends block_base {

    function init() {
        $this->title = get_string('benchmarking', 'block_benchmarking');
        $this->version = 2011060200;
    }

    function get_content() {
        if ($this->content != null) {
             return $this->content;
        }

        $this->content          = new stdClass;
        $this->content->text    = $this->make_content();
        $this->content->footer  = '';
    }
    

    function make_content() {
        global $COURSE;
        $score = calc_score($COURSE->id);
        $c  = "<div id=\"pre\">" . get_string('bmlevel','block_benchmarking') . "</div>";
        $c .= "<div id=\"level\" style=\"background-color:" . get_colourcode($COURSE->id) . "\">"  . get_benchmark_level($score) . "</div>";
        $c .= "<div id=\"score\">" . get_string('wtotalsc','block_benchmarking')  . $score . "</div>";
       // $c .= "<div>Num Students: " . get_num_student($course->id) . "</div>";
        return $c;
    }


    function instance_allow_config() {
        return false;
    }



}
?>
