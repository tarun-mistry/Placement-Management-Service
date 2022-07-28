<?php
    include("dbconnection.php");
    $id=$_POST["sid"];
    $na=$_POST["t1"];
    $con->query("update jobcategory set job_category_name='".$na."' where job_category_id='".$id."'");
    header("Location:jobcategory.php");
?>                                                      