<?php

/*  USER CONFIGURATION FILE
 *  -----------------------
 *  Please change the values below but DO NOT alter
 *  the structure of this file.
*/


// MODULE NAMES AND SCORE WEIGHTINGS
// Add modules in the format '<MODULENAME>' => <WEIGHTING>, etc...
$modules = array(
    'assignment' => 1,
    'label' => 20,
    'forum' => 3
);


// BENCHMARKING SCORE LEVELS
// Define the levels and the scores required for each
// MUST BE IN ASCENDING ORDER
$levels = array(
    'Not Applicable' => 0,
    'Bronze' => 20,
    'Silver' => 50,
    'Gold' => 300,
    'Platinum' => 500
);


// STUDENT POINTS ASSIGNMENT
// Define the number of points added per enrolled student

$stupoints = 1;


//COLOUR ASSIGNMENTS FOR LEVELS
$colours = array(
    'Not Applicable' => '#ffffff',
    'Bronze' => '#B45F04'
);

?>
