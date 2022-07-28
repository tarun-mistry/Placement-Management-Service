<?php
   include("dbconnection.php");
    $coid=$_POST["sid"];
    $cna=$_POST["t1"];
    $cpn=$_POST["t3"];
    $addr=$_POST["t4"];
    $cid=$_POST["t5"];
    $phn=$_POST["t6"];
    $email=$_POST["t7"];



$con->query("update company set company_name='$cna',contact_person_name='$cpn',company_address='$addr',city_id='$cid',phone='$phn',email_id='$email' where company_id='$coid' ");  






//~     $logo=$_FILES["t9"]["name"];    
//~     $path="photo/".$logo;
//~     move_uploaded_file($_FILES["t9"]["tmp_name"],$path);

//~     if($logo=="")
//~    {
//~       $con->query("update company set company_name='$cna',contact_person_name='$cpn',company_address='$addr',city_id='$cid',phone='$phn',email_id='$email',login_id='$log',password='$pas',rdate='$rd',rstatus='$rst' where company_id='$cid' ");  

//~      }
//~   else
//~    {
//~     $path="photo/".$logo;
//~     move_uploaded_file($_FILES["t9"]["tmp_name"],$path);
//~       $con->query("update company set company_name='$cna',company_person_name='$cpn',company_address='$addr',city_id='$cid',phone='$phn',email_id='$email',login_id='$log',password='$pas',logo='$path',rdate='$rd',rstatus='$rst' where company_id='$cid' ");  

   
   
   
   
   
 header("Location:company_profile.php");
?>
