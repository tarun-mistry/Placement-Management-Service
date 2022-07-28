<?php
   include("dbconnection.php");
     
	$id=$_REQUEST["id"];
        $type=$_REQUEST["type"];
	$uid=$_REQUEST["uid"];
    if($type=="c")
      {
$rs=$con->query("select *from job j,company c,city ct,designation d where j.designation_id=d.designation_id and j.company_id=c.company_id and j.city_id=ct.city_id and job_category_id='$id'");   
   }
   else
  {
$rs=$con->query("select *from job j,company c,city ct,designation d where j.designation_id=d.designation_id and j.company_id=c.company_id and j.city_id=ct.city_id and j.designation_id='$id'");   
  
  }
	$i=0;
	$flag=0;
	
while($rd=$rs->fetch())
    {
       $apply="";
        $rsa=$con->query("select *from jobapplication where job_id='".$rd["job_id"]."' and rid='$uid'");
	if($rda=$rsa->fetch())
	  {
	        $apply="done";
	   }
         
	   $data[$i]=array("jobid"=>$rd["job_id"],"jobname"=>$rd["job_name"],"companyname"=>$rd["company_name"],"Salary"=>$rd["salary"],"Address"=>$rd["location_address"],"city"=>$rd["city_name"],"experience"=>$rd["experience"],"isfulltime"=>$rd["isfulltime"],"designation"=>$rd["designation"],"apply"=>$apply);
	   $i++;
	   $flag=1;
	  }
	  
	  if($flag==0)
	  {
	    $data[0]=array("jobname"=>"Data Not Found");
		$arr=array("message"=>$data);
	  }
	  else
	  {
	     $arr=array("message"=>$data);
	  }
	  
	  echo json_encode($arr);
?>