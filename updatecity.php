<?php
   include("dbconnection.php");
  $cid=$_POST["cid"];
   $sid=$_POST["t1"];
   $na=$_POST["t2"];


   $con->query("update city set cityname='".$na."',state_id='".$sid."' where city_id='".$cid."'");    
   header("Location:city.php");
?>