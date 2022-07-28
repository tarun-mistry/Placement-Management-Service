<?php
   include("dbconnection.php");
   $id=$_GET["x"];
   $con->query("delete from company where company_id='".$id."'");
   header("Location:company.php");
?>