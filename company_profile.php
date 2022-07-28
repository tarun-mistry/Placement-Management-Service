<?php session_start();
	
	if(isset($_SESSION["id"]))
	{
	
	include("companyheader.php");
	include("dbconnection.php");
  
	$cid=$_SESSION["id"];
  
  $city_records=$con->query("select *from city");

$company_records=$con->query("select *from company where company_id='$cid'");
  $company_data=$company_records->fetch();
  
//  $ctid=$company_data["city_id"];
  
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


<form action="updatecompany_profile.php" method="post">
<font color="white" size="3"><b>

<input type="hidden" name="sid" value='<?php echo $cid?>'>

<table>
<tr>
 <td>Company Name</td>
 <td> <input type="text" name="t1" value='<?php echo $company_data["company_name"]; ?>'></td>
</tr>

<tr>
 <td>Contact Person Name</td>
 <td> <input type="text" name="t3" value='<?php echo $company_data["contact_person_name"]; ?>'></td>
</tr>

<tr>
 <td>Company Address</td>
 <td> <input type="text" name="t4" value='<?php echo $company_data["company_address"]; ?>'></td>
</tr>

<tr>
 <td>City</td>
 <td> 
	
	<select name="t5">
                    <?php
                         while($city_data=$city_records->fetch())
                          {
				if($company_data["city_id"]==$city_data["city_id"])
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
	</tr>

<tr>
 <td>Phone</td>
 <td> <input type="text" name="t6" value='<?php echo $company_data["phone"]; ?>'></td>
</tr>


<tr>
 <td>Email Id</td>
 <td><input type="text" name="t7" value='<?php echo $company_data["email_id"]; ?>'></td>
</tr>

<tr>
 <td>&nbsp;</td>
 <td> <input type="submit" value="Update">
      <input type="reset" value="cancel"></td>
</tr>
 

</table>
</form>
</b></font>


<?php
	include("footer.php");
	}
	else
	{
		header("Location:login.php");
	}
 
?>           