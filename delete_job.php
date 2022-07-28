<?php
    include("dbconnection.php");

	$id=$_GET["x"];
	
	$con->query("delete from job where job_id='$id'");
    
	header("Location:job.php");
?>