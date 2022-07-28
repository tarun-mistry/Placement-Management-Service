<?php
  include("header.php");
  include("dbconnection.php");
  $job_id=$_GET["x"];
  
  $city_records=$con->query("select *from city");
  $category_records=$con->query("select *from jobcategory");
  $designation_records=$con->query("select *from designation");
  
  $rss=$con->query("select *from job where job_id='".$job_id."'");
  $rds=$rss->fetch();
  
  $ctid=$rds["city_id"];
  
?>


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


<form action="update_job.php" method="post">
<font color="white" size="3"><b>

<input type="hidden" name="sid" value='<?php echo $job_id?>'>

<table>
<tr>
 <td>Job Name</td>
 <td> <input type="text" name="t1" value='<?php echo $rds["job_name"]; ?>'></td>
</tr>

<tr>
 <td>Salary</td>
 <td> <input type="text" name="t3" value='<?php echo $rds["salary"]; ?>'></td>
</tr>

<tr>
 <td>Location Address</td>
 <td> <input type="text" name="t4" value='<?php echo $rds["location_address"]; ?>'></td>
</tr>

<tr>
 <td>City</td>
 <td> 
	
	<select name="t5">
                    <?php
                         while($city_data=$city_records->fetch())
                          {
				if($rds["city_id"]==$city_data["city_id"])
				{
		?>
			    
					<option value='<?php echo $city_data["city_id"]; ?>' selected><?php echo $city_data["city_name"]; ?></option>
                             
		<?php
				}
				else
				{
		?> 
		
					<option value='<?php echo $city_data["city_id"]; ?>'><?php echo $city_data["city_name"]; ?></option>
		
		<?php
				}
			}
		?>
             </select>
	
<!--  <input type="text" name="t1" value='<?php //echo $rds["city_id"]; ?>'></td> -->
</tr>

<tr>
 <td>Experience</td>
 <td> <input type="text" name="t6" value='<?php echo $rds["experience"]; ?>'></td>
</tr>

<tr>
 <td>Category</td>
 <td> 
		
	<select name="t7">
                    <?php
                         while($category_data=$category_records->fetch())
                          {
				if($rds["job_category_id"]==$category_data["job_category_id"])
				{
		?>
			    
					<option value='<?php echo $category_data["job_category_id"]; ?>' selected><?php echo $category_data["job_category_name"]; ?></option>
                             
		<?php
				}
				else
				{
		?> 
		
					<option value='<?php echo $category_data["job_category_id"]; ?>'><?php echo $category_data["job_category_name"]; ?></option>
		
		<?php
				}
			}
		?>
             </select>

</tr>

<tr>
 <td>Designation</td>
 <td> 
		<select name="t8">
                    <?php
                         while($designation_data=$designation_records->fetch())
                          {
				if($rds["designation_id"]==$designation_data["designation_id"])
				{
		?>
			    
					<option value='<?php echo $designation_data["designation_id"]; ?>' selected><?php echo $designation_data["designation"]; ?></option>
                             
		<?php
				}
				else
				{
		?> 
		
					<option value='<?php echo $designation_data["designation_id"]; ?>'><?php echo $designation_data["designation"]; ?></option>
		
		<?php
				}
			}
		?>
             </select>

 
</tr>

<tr>
 <td>Full Time</td>
 <td>
	<?php
		if($rds["isfulltime"]=="Yes")
		{
	?>
		<input type="radio" name="t9" checked value="Yes">Yes
		<input type="radio" name="t9" value="No">No
	<?php
		}
		else
		{
	?>
		<input type="radio" name="t9" value="Yes">Yes
		<input type="radio" name="t9" checked value="No">No
	
	<?php
		}
		
	?>
	
</tr>

<tr>
 <td>Description</td>
 <td> <textarea rows="5" cols="15" name="t10"><?php echo $rds["description"]; ?></textarea>
</tr>

<tr>
 <td>&nbsp;</td>
 <td> <input type="submit" value="Update">
      <input type="reset" value="cancel"></td>
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
?>           