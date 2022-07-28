<?php
   include("dbconnection.php");
    $sid=$_POST["t1"];
    $na=$_POST["t2"];

   $con->query("insert into city(state_id,city_name) values('".$sid."','".$na."')");
   header("Location:city.php");
?>