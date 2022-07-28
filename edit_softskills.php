<?php
  include("header.php");
  include("dbconnection.php");
  $id=$_GET["x"];
  $rss=$con->query("select *from softskills where s_skills_id='".$id."'");
  $rds=$rss->fetch();
?>

<form action="update_softskills.php" method="post">
<font color="white" size="3"><b>
<input type="hidden" name="sid" value='<?php echo $rds["s_skills_id"];?>'>
<table>
<tr>
 <td>SoftSkill Name</td>
 <td> <input type="text" name="t1" value='<?php echo $rds["s_skills"]; ?>'></td>
</tr>
<tr>
 <td>&nbsp;</td>
 <td> <input type="submit" value="Update">
      <input type="reset" value="cancel"></td>
</tr>
 

</table>
</form>

<?php

 $rs=$con->query("select *from softskills");

?>
 
 <Table border="1">
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
             <td><a href='deletestate.php?x=<?php echo $rd["s_skills_id"]; ?>'>Delete</a></td>
             <td><a href='editstate.php?x=<?php echo $rd["s_skills_id"]; ?>'>Edit</a></td>
        </tr>
      <?php
   }

 ?>
</table>

</b></font> 
<?php
 include("footer.php");
?>           