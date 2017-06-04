<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json;  ");
$arr = array(  'ms'=> 'Ok' );
echo json_encode($arr);exit();

?>