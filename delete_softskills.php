<?php
   include("dbconnection.php");
   $id=$_GET["x"];
   $con->query("delete from soft_skills where s_skills_id='".$id."'");
   header("Location:soft_skills.php");
?>