<?php
  include("header.php");
   include("dbconnection.php");
?>



<?php
  $rs=$con->query("select *from company c,city ct where c.city_id=ct.city_id");
 ?>
 <div class="article">
 <h2>Company Details</h2>
 </div>
<Table cellpadding="5"  style="border:1px solid black;background-color:white;color:black;align:center" >
    <tr> 
	<td style="border:1px solid black;font-weight:bold">Company Id</td>
	<td style="border:1px solid black;font-weight:bold">Company Name</td>
	<td style="border:1px solid black;font-weight:bold">Contact person Name</td>   
	<td style="border:1px solid black;font-weight:bold">Company Address</td>
	<td style="border:1px solid black;font-weight:bold">City</td>
	<td style="border:1px solid black;font-weight:bold">Phone No.</td>
	<td style="border:1px solid black;font-weight:bold">Email ID</td>
        <td style="border:1px solid black;font-weight:bold">Logo</td>
	<td style="border:1px solid black;font-weight:bold">Registration Date</td>
	<td style="border:1px solid black;font-weight:bold">Registration Status</td>
	<td style="border:1px solid black;font-weight:bold">&nbsp;</td>
	
    </tr>
    
	<?php
          while($rd=$rs->fetch())
           {
             ?>
                <tr>
                   <td style="border:1px solid black"><?php echo $rd["company_id"]; ?></td>
                   <td style="border:1px solid black"><?php echo $rd["company_name"]; ?></td>  
                   <td style="border:1px solid black"><?php echo $rd["contact_person_name"]; ?></td>                
                   <td style="border:1px solid black"><?php echo $rd["company_address"]; ?></td>
                   <td style="border:1px solid black"><?php echo $rd["city_name"]; ?></td>
		   <td style="border:1px solid black"><?php echo $rd["phone"]; ?></td>
                   <td style="border:1px solid black"><?php echo $rd["email_id"]; ?></td>
                   <td style="border:1px solid black"><img src='<?php echo $rd["logo"]; ?>' width="40" height="50"></td>
		   <td style="border:1px solid black"><?php echo $rd["rdate"]; ?></td>
	         <td style="border:1px solid black"><?php echo $rd["rstatus"]; ?></td>
	   <?php
	       if($rd["rstatus"]=="ACTIVE")
	        {
	    ?>
	<td style="border:1px solid black"><a style="color:black" href='updatestatuscompany.php?x=<?php echo $rd["company_id"]; ?>&y=DEACTIVE'>DEACTIVE</a></td>
	         <?php
		  }
		else
		{
	 ?>
	<td style="border:1px solid black"><a style="color:black" href='updatestatuscompany.php?x=<?php echo $rd["company_id"]; ?>&y=ACTIVE'>ACTIVE</a></td>
	         <?php
		
		}
		  ?>
		
		</tr>
              <?php
             }
     ?>
  </table>
  
  
  <?php
include("footer.php");
?>