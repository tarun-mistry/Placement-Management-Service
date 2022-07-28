<?php
   $rid=$_REQUEST["rid"];
   $jobid=$_REQUEST["jobid"];
  $dt=Date('Y-m-d');
  include ("dbconnection.php");
   $con->query("insert into jobapplication(job_id,rid,application_date) values('$jobid','$rid','$dt')");   
     ?>
