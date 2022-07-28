<?php
   $at1=$_REQUEST["lid"];
   $at2=$_REQUEST["pwd"];
 
  include("dbconnection.php");
  $rd=$con->query("select * from jobseeker where login_id='$at1' AND password='$at2'");

	if($rs=$rd->fetch())
	{
		$data[0]=array("id"=>$rs["rid"],"name"=>$rs["fname"],"photo"=>$rs["photo"]);
		$arr=array("message"=>$data);
	}
	else
	{
		 $data[0]=array("id"=>"Data Not Found");
		$arr=array("message"=>$data);
	}
  
  echo json_encode($arr);
   ?>
