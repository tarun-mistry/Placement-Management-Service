<?php
    include("dbconnection.php");
    
    $id=$_POST["sid"];
    $job_name=$_POST["t1"];
    $salary=$_POST["t3"];
    $address=$_POST["t4"];
    $ctid=$_POST["t5"];
    $experience=$_POST["t6"];
    $job_cat_id=$_POST["t7"];
    $desg_id=$_POST["t8"];
    $full_time=$_POST["t9"];
    $desc=$_POST["t10"];
    
    
    
    $con->query("update job set job_name='$job_name',salary='$salary',location_address='$address',city_id='$ctid',experience='$experience',job_category_id='$job_cat_id',designation_id='$desg_id',isfulltime='$full_time',description='$desc' where job_id='$id'");
    header("Location:job.php");
?>                                                      