<?php
   include("dbconnection.php");
    $coid=$_POST["cid"];
    $cna=$_POST["t1"];
    $cpn=$_POST["t2"];
    $addr=$_POST["t3"];
    $cid=$_POST["t4"];
    $phn=$_POST["t5"];
    $email=$_POST["t6"];
    $log=$_POST["t7"];
    $pas=$_POST["t8"];
    $logo=$_FILES["t9"]["name"];    
    $rd=date('Y-m-d');
    $rst=$_POST["t11"];
    $path="photo/".$logo;
    move_uploaded_file($_FILES["t9"]["tmp_name"],$path);

    if($logo=="")
   {
      $con->query("update company set company_name='$cna',contact_person_name='$cpn',company_address='$addr',city_id='$cid',phone='$phn',email_id='$email',login_id='$log',password='$pas',rdate='$rd',rstatus='$rst' where company_id='$cid' ");  

     }
  else
   {
    $path="photo/".$logo;
    move_uploaded_file($_FILES["t9"]["tmp_name"],$path);
      $con->query("update company set company_name='$cna',company_person_name='$cpn',company_address='$addr',city_id='$cid',phone='$phn',email_id='$email',login_id='$log',password='$pas',logo='$path',rdate='$rd',rstatus='$rst' where company_id='$cid' ");  

   }
 header("Location:company.php");
?>
