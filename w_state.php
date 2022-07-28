<?php
   include("dbconnection.php");

$state_id=$_REQUEST["state_id"];
$state_name=$_REQUEST["state_name"];




$con->query("insert into state(state_id,state_name) values('$state_id','$state_name')");


$data[0]=array("result"=>"1")
$arr=array('message'=>$data);
echo json_encode($arr);
?>