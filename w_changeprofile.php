<?php
   $rid=$_REQUEST["rid"];
   include("dbconnection.php");
   $rs=$con->query("select *from jobseeker where rid='$rid'");     
    
	if($rd=$rs->fetch())
	{
	   $data[0]=array("rid"=>$rd["rid"],"fname"=>$rd["fname"],"lname"=>$rd["lname"],"address"=>$rd["address"],"cityid"=>$rd["cityid"],"phone"=>$rd["phone"],"email"=>$rd["email"],"gender"=>$rd["gender"],"dob"=>$rd["dob"],"photo"=>$rd["photo"]);
	}
	else
	{
	     $data[0]=array("rid"=>"Data Not Found");
	}
	$arr=array("message"=>$data);
	echo json_encode($arr);
?>