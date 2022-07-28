<?php
  include("header.php");
  include("dbconnection.php");
  
?>

<h2>Designation</h2>

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

<form action="add_designation.php" method="post">
<font color="white" size="3"><b>
<table>
<tr>
 <td>Job Designation</td>
 <td> <input type="text" name="t1"></td>
</tr>
<tr>
 <td>&nbsp;</td>
 <td> <input type="submit" value="submit">
      <input type="reset" value="cancel"></td>
</tr>
 

</table>
</form>
</b></font>
<?php

 $rs=$con->query("select *from designation");

?>
 
<Table  cellpadding="5" style="border:1px solid black;background-color:white;color:black">
<tr>
<td style="border:1px solid black;font-weight:bold" >Designation Id</td>
<td style="border:1px solid black;font-weight:bold" >Designation</td>
<td style="border:1px solid black;font-weight:bold" >&nbsp;</td>
<td style="border:1px solid black;font-weight:bold" >&nbsp;</td>
</tr>

<?php
  while($rd=$rs->fetch())
   {
     ?>	
	<tr>
      	     <td style="border:1px solid black"><?php echo $rd["designation_id"]; ?></td>
             <td style="border:1px solid black" ><?php echo $rd["designation"]; ?></td>    
             <td style="border:1px solid black" ><a style="color:black" href='delete_designation.php?x=<?php echo $rd["designation_id"]; ?>'>Delete</a></td>
             <td style="border:1px solid black" ><a style="color:black" href='edit_designation.php?x=<?php echo $rd["designation_id"]; ?>'>Edit</a></td>
        </tr>
      <?php
   }

 ?>
</table>
                   
<?php
  include("footer.php");
?> 

