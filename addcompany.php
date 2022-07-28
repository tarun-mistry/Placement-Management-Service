<?php
    include("dbconnection.php");
    $cn=$_POST["t1"];
    $cpn=$_POST["t2"]; 
    $ca=$_POST["t3"];
    $ct=$_POST["t4"];
    $pn=$_POST["t5"];
    $ei=$_POST["t6"];
    $li=$_POST["t7"];
    $pwd=$_POST["t8"];
    
    $cl=$_FILES["t9"]["name"];
    $path="photos/".$cl;
    move_uploaded_file($_FILES["t9"]["tmp_name"],$path);
    $rgd=date('Y-m-d');
    $rgs="ACTIVE";
    $con->query("insert into company(company_name,contact_person_name,company_address,city_id,phone,email_id,login_id,password,logo,rdate,rstatus) 
   		values('".$cn."','".$cpn."','".$ca."','".$ct."','".$pn."','".$ei."','".$li."','".$pwd."','".$path."','".$rgd."','".$rgs."')");
    
    header("Location:login.php");
?>