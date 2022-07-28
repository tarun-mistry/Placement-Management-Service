<?php
   include("header.php");
   include("dbconnection.php");
   $id=$_GET["x"];
  $rsc=$con->query("select *from city where city_id='".$id."'");
  $rdc=$rsc->fetch();

  $rss=$con->query("select *from state");
 
?>

<div class="content_resize">
<div class="sidebar">
        <div class="clr"></div>
        <div class="gadget">
		<h2 class="star"><span>Sidebar</span> Menu</h2>
		<div class="clr"></div>
		<font color="white" size="3"><b>
		<?php
		    include("sidebar.php");
		?>
		</b></font>
        </div>
</div>
</div>

<form action="updatecity.php" method="post">
<font color="white" size="3"><b>
   <input type="hidden" name="cid" value='<?php echo $rdc["city_id"] ?>'>  

<Table>
    <tr>
      <td>State</td>
      <td>
              <select name="t1">
               <?php
                     while($rsd=$rss->fetch())
                     {
                       if($rsd["state_id"]==$rdc["state_id"])
                       {
                ?>
                    <option selected value='<?php echo $rsd["state_id"]; ?>'><?php echo $rsd["state_name"]; ?></option>
               <?php
                          }
                          else
                          {
                ?>
                    <option  value='<?php echo $rsd["state_id"]; ?>'><?php echo $rsd["state_name"]; ?></option>
               <?php

                          }
                    }
                 ?>
             </select>
      </td>
     </tr>
<tr>
      <td >City</td>
      <td ><input type="text" name="t2" value='<?php echo $rdc["city_name"]; ?>'></td>
     </tr>


    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" value="Update">
           <input type="reset" value="Cancel">

       </td>
     </tr>

  </table>
</form>
 </b></font>


<?php
$rss=$con->query("select * from city c,state s where s.state_id=c.state_id");
?>
<Table cellpadding="5" style="border:1px solid black;background-color:white;color:black">
<tr>
<td style="border:1px solid black;font-weight:bold">City Id</td>
<td style="border:1px solid black;font-weight:bold">City Name</td>
<td style="border:1px solid black;font-weight:bold">State Name</td>
<td style="border:1px solid black;font-weight:bold">&nbsp;</td>
<td style="border:1px solid black;font-weight:bold">&nbsp;</td>
</tr>
<?php

	while($rds=$rss->fetch())
	{
             ?>
                <tr>
                   <td style="border:1px solid black"><?php echo $rds["city_id"]; ?></td>
                   <td style="border:1px solid black"><?php echo $rds["city_name"]; ?></td>
	           <td style="border:1px solid black"><?php echo $rds["state_name"]; ?></td>
                    <td style="border:1px solid black"><a style="color:black" href='deletecity.php?x=<?php echo $rds["city_id"]; ?>'>Delete</a></td>
                    <td style="border:1px solid black"><a style="color:black" href='editcity.php?x=<?php echo $rds["city_id"]; ?>'>Edit</a></td>

                 </tr>
              <?php
             }
     ?>
  </table>

<?php
include("footer.php");
?>



