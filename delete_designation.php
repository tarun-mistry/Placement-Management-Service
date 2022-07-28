<?php
    include("dbconnection.php");
    $id=$_GET["x"];
    $con->query("delete from designation where designation_id='".$id."'");
    header("Location:designation.php");
?>