<?php
   
  include("dbconnection.php");
  $loginid=$_REQUEST["email"];
   $rs=$con->query("select *from jobseeker where email='$loginid'");     
    
	if($rd=$rs->fetch())
     {
	  $data[0]=array("phone"=>$rd["phone"], 'password'=>$rd["password"]);
	   $arr=array("message"=>$data);
	   }
	 else
     {
	    $data[0]=array("phone"=>"InCorrect");
		$arr=array("message"=>$data);
	 
	 }	 
	  echo json_encode($arr);
	  
   ?>

