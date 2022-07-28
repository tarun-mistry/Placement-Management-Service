<?php
    include("dbconnection.php");
    $id=$_GET["x"];
    $con->query("delete from state where state_id='".$id."'");
    header("Location:state.php");
?>