<?php
   include("dbconnection.php");

	$rid=$_REQUEST["rid"];
       
$rs=$con->query("select *from job j,company c,city ct,designation d,jobapplication jp where jp.job_id=j.job_id and  j.designation_id=d.designation_id and j.company_id=c.company_id and j.city_id=ct.city_id and jp.rid='$rid'");   
  	$i=0;
	$flag=0;
	
while($rd=$rs->fetch())
    {
  	   $data[$i]=array("jobid"=>$rd["job_id"],"jobname"=>$rd["job_name"],"companyname"=>$rd["company_name"],"Salary"=>$rd["salary"],"Address"=>$rd["location_address"],"city"=>$rd["city_name"],"experience"=>$rd["experience"],"isfulltime"=>$rd["isfulltime"],"designation"=>$rd["designation"],"applydate"=>$rd["application_date"]);
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