<?php
    include("dbconnection.php");
    $na=$_POST["t1"];
    $con->query("insert into designation(designation) values('".$na."')");
    header("Location:designation.php");
?>