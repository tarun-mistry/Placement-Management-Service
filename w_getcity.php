<?php
	include ("dbconnection.php");
      
   $rs=$con->query("select *from city");     
    $i=0;
	$flag=0;
   while($rd=$rs->fetch())
    {
	   $data[$i]=array("cityid"=>$rd["city_id"],"cityname"=>$rd["city_name"]);
	   $i++;
	   $flag=1;
	  }
	  
	  if($flag==0)
	  {
	    $data[0]=array("cityid"=>"Data Not Found");
		$arr=array("message"=>$data);
	  }
	  else
	  {
	     $arr=array("message"=>$data);
	  }
	  
	  echo json_encode($arr);

?>