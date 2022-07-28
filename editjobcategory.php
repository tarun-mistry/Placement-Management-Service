<?php
  include("header.php");
  include("dbconnection.php");
  $id=$_GET["x"];
  $rss=$con->query("select *from jobcategory where job_category_id='".$id."'");
  $rds=$rss->fetch();
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

<form action="updatejobcategory.php" method="post">
<font color="white" size="3"><b>

<input type="hidden" name="sid" value='<?php echo $rds["job_category_id"];?>'>
<table>
<tr>
 <td>JobcategoryName</td>
 <td> <input type="text" name="t1" value='<?php echo $rds["job_category_name"]; ?>'></td>
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

 $rs=$con->query("select *from jobcategory");

?>
 <Table cellpadding="5" style="border:1px solid black;background-color:white;color:black">
  <tr>
   <td style="border:1px solid black;font-weight:bold">JobCategory Id</td>
   <td style="border:1px solid black;font-weight:bold">JobCategory Name</td>
   <td style="border:1px solid black;font-weight:bold">&nbsp;</td>
   <td style="border:1px solid black;font-weight:bold">&nbsp;</td>
 </tr>

<?php
  while($rd=$rs->fetch())
   {
     ?>	
	<tr>
      	     <td style="border:1px solid black"><?php echo $rd["job_category_id"]; ?></td>
             <td style="border:1px solid black"><?php echo $rd["job_category_name"]; ?></td>    
             <td style="border:1px solid black"><a style="color:black" href='deletejobcategory.php?x=<?php echo $rd["job_category_id"]; ?>'>Delete</a></td>
             <td style="border:1px solid black"><a style="color:black" href='editjobcategory.php?x=<?php echo $rd["job_category_id"]; ?>'>Edit</a></td>
        </tr>
      <?php
   }

 ?>
</table>
</b></font>  

<?php
 include("footer.php");
?>           