<?php session_start();

	if(isset($_SESSION["id"]))
	{
	include("dbconnection.php");

	$cid=$_SESSION["id"];
	$old_pwd=$_REQUEST["t1"];
	$new_pwd=$_REQUEST["t2"];
	$new_pwd1=$_REQUEST["t3"];
	
	$company_record=$con->query("select * from company where company_id='$cid'");
	$company_data=$company_record->fetch();
	
	$password=$company_data["password"];
	
	if($password==$old_pwd)
	{
		if($new_pwd==$new_pwd1)
		{
			$con->query("update company set password='$new_pwd'");
			header("Location:company_panel.php");
		}
		else
		{
			header("Location:change_company_pwd.php?x=1");
		}
	}
	else
	{
		header("Location:change_company_pwd.php?y=1");
	}
	}
	else
	{
		header("Location:login.php");
	}
?>