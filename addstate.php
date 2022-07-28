<?php
    include("dbconnection.php");
    $na=$_POST["t1"];
    $con->query("insert into state(state_name) values('".$na."')");
    header("Location:state.php");
?>