<?php
    include("dbconnection.php");
    $na=$_POST["t1"];
    $con->query("insert into jobcategory(job_category_name) values('".$na."')");
    header("Location:jobcategory.php");
?>