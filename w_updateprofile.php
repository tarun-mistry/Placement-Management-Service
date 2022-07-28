<?php

        include("dbconnection.php");
   
   $rid=$_REQUEST["rid"];
   $fname=$_REQUEST["fname"];
   $lname=$_REQUEST["lname"];
   $address=$_REQUEST["address"];
   $cityid=$_REQUEST["cityid"];
   $phone=$_REQUEST["phone"];
   $email=$_REQUEST["email"];
   $gender=$_REQUEST["gender"];
   $dob=$_REQUEST["dob"];

 
   $photo=$_FILES["image"]["name"];
   
   $photopath="photos/".$photo;
   
   move_uploaded_file($_FILES["image"]["tmp_name"],$photopath); 
  
   $con->query("update jobseeker set fname='$fname',lname='$lname',address='$address',cityid='$cityid',phone='$phone',email='$email',gender='$gender',dob='$dob',photo='$photopath' where rid='$rid'");   
 
 $data[0]=array('result'=>"1");
  $arr=array('message'=>$data);
  
  echo json_encode($arr);
   ?>
