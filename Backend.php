<?php
/**
 * Created by PhpStorm.
 * User: lokel
 * Date: 04/10/2020
 * Time: 17:12
 */

//Very primitive check it's ajax call
$is_ajax = 'xmlhttprequest' == strtolower( $_SERVER['HTTP_X_REQUESTED_WITH'] ?? '' );
if(!$is_ajax){
    print_r('Only for AJAX call');
    die();
}

//Need load the class (more advance framework use use statement)
require_once ("WindTurbine.php");

//Generate report from the input
function generateReport($input) {

    $report = array();

    foreach ($input as $key=>$item) {
        $report[$key] = '';
        if($item % 3 == 0){
            $report[$key] .= 'Coating Damage';
        }

        if($item % 5 == 0){
            if($report[$key])$report[$key].=' and ';
            $report[$key] .= 'Lightning Strike';
        }

        if($report[$key] == '') $report[$key] = $item;
    }

    return $report;
}

//Define the Wind turbine and ask the input from it
$wildTurbine = new WindTurbine();
$input = $wildTurbine->getItemList();

//give ajax answer
header('Content-Type: application/json');
echo json_encode(generateReport($input));

