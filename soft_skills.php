<?php
	include("header.php");
  	include("dbconnection.php");  
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


<form action="add_softskills.php" method="post">
<font color="white" size="3"><b>
<table>
	<tr>
 		<td>Soft Skills</td>
 		<td> <input type="text" name="t1"></td>
	</tr>
	<tr>
 		<td>&nbsp;</td>
 		<td> <input type="submit" value="Submit">
      		<input type="reset" value="Cancel"></td>
	</tr>
 

</table>
</form>
</br>
<?php

 $rs=$con->query("select *from softskills");

?>
 
 <Table border="1" cellpadding="5" bordercolor="black">
  <tr>
   <td>SoftSkill Id</td>
   <td>SoftSkill Name</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
 </tr>

<?php
  while($rd=$rs->fetch())
   {
     ?>	
	<tr>
      	     <td><?php echo $rd["s_skills_id"]; ?></td>
             <td><?php echo $rd["s_skills"]; ?></td>    
             <td><a href='delete_softskills.php?x=<?php echo $rd["s_skills_id"]; ?>'>Delete</a></td>
             <td><a href='edit_softskills.php?x=<?php echo $rd["s_skills_id"]; ?>'>Edit</a></td>
        </tr>
      <?php
   }

 ?>
</table>
</b></font>          



<?php
  include("footer.php");
?>