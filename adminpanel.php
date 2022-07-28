<?php session_start();
	
	if(isset($_SESSION["id"]))
	{
	include("header.php");
  	include("dbconnection.php");  
?>


<h2>Welcome to Admin Panel</h2>
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


        
<?php
include("footer.php");

}
else
{
	header("Location:login.php");
}
  
?>