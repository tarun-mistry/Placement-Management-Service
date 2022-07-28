<?php
   include("dbconnection.php");
   $id=$_GET["x"];
   $con->query("delete from city where city_id='".$id."'");
   header("Location:city.php");
?>