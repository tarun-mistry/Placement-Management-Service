<?php session_start();
	if(isset($_SESSION["id"]))
	{
	include("companyheader.php");
  	include("dbconnection.php");  
	
	$cid=$_SESSION["id"];
	
	$city_records=$con->query("select *from city");
	$category_records=$con->query("select *from jobcategory");
	$designation_records=$con->query("select *from designation");
	
?>

<h2>Job</h2>

<div class="content_resize">
<div class="sidebar">
        <div class="clr"></div>
        <div class="gadget">
		<h2 class="star"><span>Sidebar</span> Menu</h2>
		<div class="clr"></div>
		<font color="white" size="3"><b>
		<?php
		    include("sidebar_companypanel.php");
		?>
		</b></font>
        </div>
</div>
</div>

<form action="addjob.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="cid" value='<?php echo $cid ?>'>
<font color="white" size="3"><b> 
 <Table>
    

<tr>     
 <td>Job Name</td>
      <td><input type="text" name="t1"></td>
     </tr> 

<tr>     
 <td>Salary</td>
      <td><input type="text" name="t2"></td>
     </tr> 


<tr>    
      <td>Location Address</td>
     <td><textarea rows="4" cols="15" name="t3"></textarea></td>
     </tr>


<tr>
      <td>City</td>
      <td><select name="t4">
                    <?php
                         while($city_data=$city_records->fetch())
                          {
                            ?>
                          <option value='<?php echo $city_data["city_id"]; ?>'><?php echo $city_data["city_name"]; ?></option>
                             <?php
                          }
                     ?> 
             </select>
        </td>
     </tr>


<tr>     
 <td>Experience</td>
      <td><input type="text" name="t5"></td>
     </tr>

	<tr>
      <td>Job Category</td>
      <td><select name="t6">
                    <?php
                         while($category_data=$category_records->fetch())
                          {
                            ?>
                          <option value='<?php echo $category_data["job_category_id"]; ?>'><?php echo $category_data["job_category_name"]; ?></option>
                             <?php
                          }
                     ?> 
             </select>
        </td>
     </tr> 

     <tr>
      <td>Designation</td>
      <td><select name="t7">
                    <?php
                         while($designation_data=$designation_records->fetch())
                          {
                            ?>
                          <option value='<?php echo $designation_data["designation_id"]; ?>'><?php echo $designation_data["designation"]; ?></option>
                             <?php
                          }
                     ?> 
             </select>
        </td>
     </tr> 

     <tr>
      <td>Full Time</td>
      <td>
		<input type="radio" name="t8" value="Yes">Yes
		<input type="radio" name="t8" value="No">No
      </td>
     </tr>

<tr>
<td>Description</td>
<td><textarea rows="5" cols="15" name="t9"></textarea></td>
</tr>

       <tr>
      <td>&nbsp;</td>
      <td><input type="submit" value="Submit">&nbsp;&nbsp;
           <input type="reset" value="Cancel">

       </td>
     </tr>

  </table>
</form>
</b></font>
<br><br><br>


<?php
$rss=$con->query("select * from job");
?>
<Table cellpadding="5" style="border:1px solid black;background-color:white;color:black">
<tr>
<td style="border:1px solid black;font-weight:bold" >Job Name</td>
<td style="border:1px solid black;font-weight:bold" >Company Name</td>
<td style="border:1px solid black;font-weight:bold" >Salary</td>
<td style="border:1px solid black;font-weight:bold" >Location Address</td>
<td style="border:1px solid black;font-weight:bold" >City</td>
<td style="border:1px solid black;font-weight:bold" >Experience</td>
<td style="border:1px solid black;font-weight:bold" >Job Category</td>
<td style="border:1px solid black;font-weight:bold" >Designation</td>
<td style="border:1px solid black;font-weight:bold" >Full Time</td>
<td style="border:1px solid black;font-weight:bold" >Description</td>
<td style="border:1px solid black;font-weight:bold" >Post date</td>
<td style="border:1px solid black;font-weight:bold" >&nbsp;</td>
<td style="border:1px solid black;font-weight:bold" >&nbsp;</td>
</tr>
<?php

	while($rds=$rss->fetch())
	{
             ?>
                <tr>
                   <td style="border:1px solid black" ><?php echo $rds["job_name"]; ?></td>
                   <td style="border:1px solid black" ><?php echo $rds["company_id"]; ?></td>
	            <td style="border:1px solid black" ><?php echo $rds["salary"]; ?></td>
		    <td style="border:1px solid black" ><?php echo $rds["location_address"]; ?></td>
		    <td style="border:1px solid black" ><?php echo $rds["city_id"]; ?></td>
		    <td style="border:1px solid black" ><?php echo $rds["experience"]; ?></td>
		    <td style="border:1px solid black" ><?php echo $rds["job_category_id"]; ?></td>
		    <td style="border:1px solid black" ><?php echo $rds["designation_id"]; ?></td>
		    <td style="border:1px solid black" ><?php echo $rds["isfulltime"]; ?></td>
		    <td style="border:1px solid black" ><?php echo $rds["description"]; ?></td>
		    <td style="border:1px solid black" ><?php echo $rds["posted_date"]; ?></td>
		    
                    <td style="border:1px solid black" ><a style="color:black" href='delete_job.php?x=<?php echo $rds["job_id"]; ?>'>Delete</a></td>
                    <td style="border:1px solid black" ><a style="color:black" href='edit_job.php?x=<?php echo $rds["job_id"]; ?>'>Edit</a></td>

                 </tr>
              <?php
             }
     ?>
  </table>



<?php
	include("footer.php");
	}
	else
	{
		header("Location:login.php");
	}
  
?>