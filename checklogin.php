<?php session_start();
    $l=$_POST["t1"];
    $p=$_POST["t2"];
  
  include("dbconnection.php");  
  
  $rs=$con->query("select *from admin where login_id='$l' and password='$p'");
	if($rd=$rs->fetch())
	{
		$_SESSION["id"]=$rd["admin_id"];
		header("Location:adminpanel.php");
 	}
	else
	{
		$rsl=$con->query("select *from company where login_id='$l' and password='$p'");
		if($rdl=$rsl->fetch())
		{
			$_SESSION["id"]=$rdl["company_id"];
			header("Location:company_panel.php");
		}
		else
		{
			header("Location:login.php?x=l");
		}
	}

?>
