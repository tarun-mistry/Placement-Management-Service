<?php
    include("dbconnection.php");
   
$cid=$_REQUEST["cid"];
$job_name=$_POST["t1"];          


$salary=$_POST["t2"];
$address=$_POST["t3"];
$ctid=$_POST["t4"];
$experience=$_POST["t5"];
$job_cat_id=$_POST["t6"];
$desg_id=$_POST["t7"];
$full_time=$_POST["t8"];
$desc=$_POST["t9"];
$posted_date=date('Y-m-d');
    
   $con->query("insert into job(job_name,company_id,salary,location_address,city_id,experience,job_category_id,designation_id,isfulltime,description,posted_date) values('$job_name','$cid','$salary','$address','$ctid','$experience','$job_cat_id','$desg_id','$full_time','$desc','$posted_date')");
  /*echo $cid;
   echo $job_name;
   echo $salary;
   echo $address;
   echo $ctid;
   echo $experience;
   echo $cid;
  echo $cid;
  echo $cid;
  echo $cid;*/
  header("Location:job.php");
?>