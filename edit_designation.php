<?php
  include("header.php");
  include("dbconnection.php");
  $id=$_GET["x"];
  $rss=$con->query("select *from designation where designation_id='".$id."'");
  $rds=$rss->fetch();
?>

<form action="update_designation.php" method="post">
<font color="white" size="3"><b>

<input type="hidden" name="sid" value='<?php echo $rds["designation_id"];?>'>
<table>
<tr>
 <td>Designation Name</td>
 <td> <input type="text" name="t1" value='<?php echo $rds["designation"]; ?>'></td>
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

 $rs=$con->query("select *from designation");

?>
 
<Table cellpadding="5" style="border:1px solid black;background-color:white;color:black">
  <tr>
   <td style="border:1px solid black;font-weight:bold">Designation Id</td>
   <td style="border:1px solid black;font-weight:bold">Designation Name</td>
   <td style="border:1px solid black;font-weight:bold">&nbsp;</td>
   <td style="border:1px solid black;font-weight:bold">&nbsp;</td>
 </tr>

<?php
  while($rd=$rs->fetch())
   {
     ?>	
	<tr>
      	     <td style="border:1px solid black"><?php echo $rd["designation_id"]; ?></td>
             <td style="border:1px solid black"><?php echo $rd["designation"]; ?></td>    
             <td style="border:1px solid black"><a style="color:black" href='delete_designation.php?x=<?php echo $rd["designation_id"]; ?>'>Delete</a></td>
             <td style="border:1px solid black"><a style="color:black" href='edit_designation.php?x=<?php echo $rd["designation_id"]; ?>'>Edit</a></td>
        </tr>
      <?php
   }

 ?>
</table>
</b></font>  

<?php
 include("footer.php");
?>           