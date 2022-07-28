<?php
   include("dbconnection.php");
    $na=$_POST["t1"];

   $con->query("insert into soft_skills(s_skills) values('".$na."')");
   header("Location:soft_skills.php");
?>