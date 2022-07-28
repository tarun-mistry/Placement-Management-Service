<?php
  include("header.php");
   include("dbconnection.php");
   $rss=$con->query("select *from city");
?>
<br><h3 style="margin-left:50px">Contractor</h3></br>
<form action="addcontractor.php" method="post" enctype="multipart/form-data">
  <Table>
    
      <tr>    
      <td>First Name</td>
      <td><input type="text" name="t1"></td>
     </tr>


<tr>     
 <td>Last Name</td>
      <td><input type="text" name="t2"></td>
     </tr> 


<tr>    
      <td>Address</td>
     <td><textarea rows="4" cols="15" name="t3"></textarea></td>
     </tr>

<tr>
      <td>City</td>
      <td><select name="t4">
                    <?php
                         while($rdc=$rss->fetch())
                          {
                            ?>
                          <option value='<?php echo $rdc["city_id"]; ?>'><?php echo $rdc["city_name"]; ?></option>
                             <?php
                          }
                     ?> 
             </select>
        </td>
     </tr> 


<tr>


<tr>     
 <td>Phone No.</td>
      <td><input type="text" name="t5"></td>
     </tr>
	
	<tr>
      <td>Email ID </td>
      <td><input type="text" name="t6"></td>
     </tr> 	 
	
	<tr>
      <td>Login Id</td>
      <td><input type="text" name="t7"></td>
     </tr> 

     <tr>
      <td>Password</td>
      <td><input type="password" name="t8"></td>
     </tr>

<tr>
<td>Photo:-</td>
<td><input type="file" name="t9"></td>
</tr>

   
<tr>
      <td>Work</td>
      <td><select name="t10">
                    <?php
                         while($rds=$rss->fetch())
                          {
                            ?>
                          <option value='<?php echo $rds["woek_id"]; ?>'><?php echo $rds["work_name"]; ?></option>
                             <?php
                          }
                     ?> 

              </select>
     </td>
    </tr>

<tr>
<td>Registration Date</td>
<td><input type="date" name="t10"></td>
</tr>

<tr>
<td>Registration Status</td>
<td><input type="date" name="t11"></td>
</tr>	
	

    

       <tr>
      <td>&nbsp;</td>
      <td><input type="submit" value="Submit">
           <input type="reset" value="Cancel">

       </td>
     </tr>

  </table>
</form>

<?php

  $rs=$con->query("select *from contractor c,city ct,work w where c.city_id=ct.city_id and c.work_id=w.work_id");
?>
  <Table border="1"> 
    <tr> 
      <td>Contactor Id</td>
      <td>First Name</td>
      <td>Last Name</td>
      <td>Address</td>
	  <td>City</td>
	  <td>Phone No.</td>
	  <td>Email ID</td>
	  <td>Login ID</td>
	  <td>Password</td>
      <td>Photo</td>
      <td>Work</td>
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
                   <td><?php echo $rd["contractor_id"]; ?></td>
                   <td><?php echo $rd["first_namename"]; ?></td>  
				   <td><?php echo $rd["last_name"]; ?></td>                
                   <td><?php echo $rd["address"]; ?></td>
                   <td><?php echo $rd["city_name"]; ?></td>
				   <td><?php echo $rd["phone_no"]; ?></td>
                   <td><?php echo $rd["email_id"]; ?></td>
                   <td><?php echo $rd["login_id"]; ?></td>
				   <td><?php echo $rd["password"]; ?></td>
                   <td><img src='<?php echo $rd["photo"]; ?>' width="40" height="50"></td>
				   <td><?php echo $rd["work_name"]; ?></td>
                   <td><?php echo $rd["registration_date"]; ?></td>
	               <td><?php echo $rd["registration_status"]; ?></td>
              
	<td><a href='deletecontractor.php?x=<?php echo $rd["contractor_id"]; ?>'>Delete</a></td>
                   <td><a href='editcontractor.php?x=<?php echo $rd["contractor_id"]; ?>'>Edit</a></td>

                 </tr>
              <?php
             }
     ?>
  </table>
<?php
include("footer.php");
   
?>