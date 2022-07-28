<?php
	include ("dbconnection.php");
       $id=$_REQUEST["id"];
       
   $rs=$con->query("select *from jobseeker where rid='$id'");     
    $rd=$rs->fetch();
    
    $data[0]=array("resume"=>$rd["resume"]);
	     $arr=array("message"=>$data);
	  
	  echo json_encode($arr);

?>