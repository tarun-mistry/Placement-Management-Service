<?php
	include("header.php");
  	include("dbconnection.php");  
?>


<h2>State</h2>

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

<form action="addstate.php" method="post">
<font color="white" size="3"><b>
<table>
	<tr>
 		<td>StateName</td>
 		<td> <input type="text" name="t1"></td>
	</tr>
	<tr>
 		<td>&nbsp;</td>
 		<td> <input type="submit" value="Submit">
      		<input type="reset" value="Cancel"></td>
	</tr>
 

</table>
</form>
</b></font>
</br>
<?php

 $rs=$con->query("select *from state");

?>
 
 <Table cellpadding="5" style="border:1px solid black;background-color:white;color:black">
  <tr>
   <td  style="border:1px solid black;font-weight:bold">State Id</td>
   <td  style="border:1px solid black;font-weight:bold">State Name</td>
   <td  style="border:1px solid black;font-weight:bold">&nbsp;</td>
   <td  style="border:1px solid black;font-weight:bold">&nbsp;</td>
 </tr>

<?php
  while($rd=$rs->fetch())
   {
     ?>	
	<tr>
      	     <td style="border:1px solid black" ><?php echo $rd["state_id"]; ?></td>
             <td style="border:1px solid black" ><?php echo $rd["state_name"]; ?></td>    
             <td style="border:1px solid black" ><a style="color:black" href='deletestate.php?x=<?php echo $rd["state_id"]; ?>'>Delete</a></td>
             <td style="border:1px solid black" ><a style="color:black" href='editstate.php?x=<?php echo $rd["state_id"]; ?>'>Edit</a></td>
        </tr>
      <?php
   }

 ?>
</table>
        
<?php
  include("footer.php");
?>