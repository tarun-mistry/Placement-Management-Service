<?php
	include("visitorheader.php");
  	include("dbconnection.php");  
	$rss=$con->query("select *from city");
?>

<h2>Company Sign UP</h2>
<form action="addcompany.php" method="post" enctype="multipart/form-data">
<font color="white" size="3"><b> 
 <Table>
    

<tr>     
 <td>Company Name</td>
      <td><input type="text" name="t1" size=30px></td>
     </tr> 

<tr>     
 <td>Contact person Name</td>
      <td><input type="text" name="t2"size=30px ></td>
     </tr> 


<tr>    
      <td>Address</td>
     <td><textarea rows="2" cols="23" name="t3"></textarea></td>
     </tr>

<tr>
      <td>City</td>
      <td><select name="t4">
                    <?php
                         while($rsd=$rss->fetch())
                          {
                            ?>
                          <option value='<?php echo $rsd["city_id"]; ?>'><?php echo $rsd["city_name"]; ?></option>
                             <?php
                          }
                     ?> 
             </select>
        </td>
     </tr> 


<tr>     
 <td>Phone No.</td>
      <td><input type="text" name="t5" size=30px></td>
     </tr>
	
	<tr>
      <td>Email ID </td>
      <td><input type="text" name="t6" size=30px></td>
     </tr> 	 
	
	<tr>
      <td>Login Id</td>
      <td><input type="text" name="t7" size=30px></td>
     </tr> 

     <tr>
      <td>Password</td>
      <td><input type="password" name="t8" size=30px></td>
     </tr>

<tr>
<td>Company logo</td>
<td><input type="file" name="t9"></td>
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

<?php
  include("visitorfooter.php");
?>