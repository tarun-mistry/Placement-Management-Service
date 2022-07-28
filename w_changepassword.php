<?php
	include("dbconnection.php");

	$flag=0;

	$id=$_REQUEST["id"];
	$pwd=$_REQUEST["pwd"];
	$npwd=$_REQUEST["npwd"];

	$rd=$con->query("select * from jobseeker where rid='$id'");
	$records=$rd->fetch();
	
	$old_pwd=$records["password"];
	

	if($pwd==$old_pwd)
	{
		$con->query("update jobseeker set password='$npwd' where rid='$id' ");
		$flag++;
	}
	//echo "$flag";
	
	if($flag==0)
	{
		$data[0]=array("result"=>"Wrong Data");
		$arr=array('message'=>$data);
	}
	else
	{
		$data[0]=array("result"=>"1");
		$arr = array('message' => $data);	
		 
	}
	
	echo json_encode($arr);
	 
?>