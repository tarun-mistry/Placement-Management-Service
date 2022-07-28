<?php
    include("dbconnection.php");
    $id=$_POST["sid"];
    $na=$_POST["t1"];
    $con->query("update designation set designation='".$na."' where designation_id='".$id."'");
    header("Location:designation.php");
?>                                                      