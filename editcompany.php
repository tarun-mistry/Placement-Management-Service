<?php
  include("header.php");
  include("dbconnection.php");
  $id=$_GET["x"];
  $rss=$con->query("select *from company where company_id='".$id."'");
  $rds=$rss->fetch();
  $rsc=$con->query("select *from city");
?>


<form action="updatecompany.php" method="post">
<font color="white" size="3"><b>
<input type="hidden" name="sid" value='<?php echo $rds["company_id"];?>'>
<table>
<tr>
 <td>Company Name</td>
 <td> <input type="text" name="t1" value='<?php echo $rds["company_name"]; ?>'></td>
</tr>

<tr>
 <td>Contact person Name</td>
 <td> <input type="text" name="t2" value='<?php echo $rds["contact_person_name"]; ?>'></td>
</tr>

<tr>
 <td>Addres</td>
      <td><textarea name="t3" rows="3" cols="20"><?php echo $rds["company_address"]; ?></textarea></td>
</tr>

<tr>
      <td>City</td>
      <td>
              <select name="t4">
               <?php
                     while($rsd=$rsc->fetch())
                     {
                       if($rsd["city_id"]==$rds["city_id"])
                       {
                ?>
                    <option selected value='<?php echo $rsd["city_id"]; ?>'><?php echo $rsd["city_name"]; ?></option>
               <?php
                          }
                          else
                          {
                ?>
                    <option  value='<?php echo $rsd["city_id"]; ?>'><?php echo $rsd["city_name"]; ?></option>
               <?php

                          }
                    }
                 ?>
             </select>
      </td>
     </tr>

<tr>
      <td>Phone No.</td>
      <td><input type="text" name="t5" value='<?php echo $rds["phone"]; ?>'></td>
     </tr>   
<tr>
      <td>Email Id</td>
      <td><input type="text" name="t6" value='<?php echo $rds["email_id"]; ?>'></td>
     </tr>   
<tr>
      <td>Login Id</td>
      <td><input type="text" name="t7" value='<?php echo $rds["login_id"]; ?>'></td>
     </tr>   
<tr>
      <td>Password</td>
      <td><input type="text" name="t8" value='<?php echo $rds["password"]; ?>'></td>
     </tr>   
<tr>
      <td>Logo</td>
      <td><input type="file" name="t9">
             <img src='<?php echo $rds["logo"]; ?>' height="40" width="40">
       </td>
     </tr>   
<tr>
      <td>Registration Status</td>
      <td><input type="text" name="t10" value='<?php echo $rds["rstatus"]; ?>'></td>
     </tr>   



<tr>
 <td>&nbsp;</td>
 <td> <input type="submit" value="Update">
      <input type="reset" value="cancel"></td>
</tr>
 

</table>
</form>

<?php

 $rs=$con->query("select *from company");

?>
 
 <Table border="1">

<tr> 
      <td>Company Id</td>
      <td>Company Name</td>
      <td>Contact Person Name</td>
      <td>Company Address</td>
      <td>City</td>
      <td>Phone No.</td>
	  <td>Email ID</td>
	  <td>Login ID</td>
	  <td>Password</td>
      	  <td>Logo</td>
	  <td>Registration Date</td>
	  <td>Registration Status</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>



<?php
  while($rd=$rs->fetch())
   {
     ?>	
	<tr>
      	     <td><?php echo $rd["company_id"]; ?></td>
             <td><?php echo $rd["company_name"]; ?></td> 
		<td><?php echo $rd["contact_person_name"]; ?></td>  
             	 <td><?php echo $rd["company_address"]; ?></td> 
		<td><?php echo $rd["city_id"]; ?></td>
		<td><?php echo $rd["phone"]; ?></td>
		<td><?php echo $rd["email_id"]; ?></td>
                <td><?php echo $rd["login_id"]; ?></td>
		<td><?php echo $rd["password"]; ?></td>
                <td><img src='<?php echo $rd["logo"]; ?>' width="40" height="50"></td>
                <td><?php echo $rd["rdate"]; ?></td>
	        <td><?php echo $rd["rstatus"]; ?></td>
             <td><a href='deletecompany.php?x=<?php echo $rd["company_id"]; ?>'>Delete</a></td>
             <td><a href='editcompany.php?x=<?php echo $rd["company_id"]; ?>'>Edit</a></td>
        </tr>
      <?php
   }

 ?>

</table>

</b></font> 
<?php
 include("footer.php");
?>           