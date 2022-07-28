<?php
   $fname=$_REQUEST["fname"];
   $lname=$_REQUEST["lname"];
  $add=$_REQUEST["address"]; 
  $ctid=$_REQUEST["cityid"]; 
  $phone=$_REQUEST["phone"]; 
  $email=$_REQUEST["email"];
  $g=$_REQUEST["gender"];
   $dob=$_REQUEST["dob"];
   $rdate=date('Y-m-d');
   $status="ACTIVE";
   $l_id=$_REQUEST["loginid"];
   $pwd=$_REQUEST["password"];
   
   $photo=$_FILES["image"]["name"];
   
   $photopath="photos/".$photo;
   
   move_uploaded_file($_FILES["image"]["tmp_name"],$photopath); 
  
  
  
  include ("dbconnection.php");
   $con->query("insert into jobseeker(fname,lname,address,cityid,phone,email,gender,dob,rdate,rstatus,login_id,password,photo,resume) values('$fname','$lname','$add','$ctid','$phone','$email','$g','$dob','$rdate','$status','$l_id','$pwd','$photopath','')");   
  $data[0]=array('result'=>"1");
  $arr=array('message'=>$data);
  
  echo json_encode($arr);
   ?>
