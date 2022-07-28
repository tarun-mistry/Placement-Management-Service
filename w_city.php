<?php
   include("dbconnection.php");

$city_id=$_REQUEST["city_id"];
$city_name=$_REQUEST["city_name"];
$state_id=$_REQUEST["state_id"];




$con->query("insert into city(city_id,city_name,state_id,) values('$city_id','$city_name','$state_id')");


$data[0]=array("result"=>"1")
$arr=array('message'=>$data);
echo json_encode($arr);
?>