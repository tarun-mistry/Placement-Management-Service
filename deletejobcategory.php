<?php
    include("dbconnection.php");
    $id=$_GET["x"];
    $con->query("delete from jobcategory where job_category_id='".$id."'");
    header("Location:jobcategory.php");
?>