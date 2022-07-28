<?php
   include("dbconnection.php");
   $rs=$con->query("select *from jobcategory");   

 $i=0;
	$flag=0;
   while($rd=$rs->fetch())
    {
	   $data[$i]=array("jobcategoryid"=>$rd["job_category_id"],"jobcategoryname"=>$rd["job_category_name"]);
	   $i++;
	   $flag=1;
	  }
	  
	  if($flag==0)
	  {
	    $data[0]=array("jobcategoryid"=>"Data Not Found");
		$arr=array("message"=>$data);
	  }
	  else
	  {
	     $arr=array("message"=>$data);
	  }
	  
	  echo json_encode($arr);
?>