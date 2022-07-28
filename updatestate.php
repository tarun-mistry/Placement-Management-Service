<?php
    include("dbconnection.php");
    $id=$_POST["sid"];
    $na=$_POST["t1"];
    $con->query("update state set state_name='".$na."' where state_id='".$id."'");
    header("Location:state.php");
?>                                                      