<?php session_start();
       
	if(isset($_SESSION["id"]))
	{
		include("companyheader.php");
?>


<html>
<body>

<div class="content_resize">
<div class="sidebar">
        <div class="clr"></div>
        <div class="gadget">
		<h2 class="star"><span>Sidebar</span> Menu</h2>
		<div class="clr"></div>
		<font color="white" size="3"><b>
		<?php
		    include("sidebar_companypanel.php");
		?>
		</b></font>
        </div>
</div>
</div>

		<form action="update_company_pwd.php" method="post">
		<font color="white" size="3"><b> 
		<table>
					<tr>
					<td>Enter Old Password</td>
						<td><input  type="password" name="t1"></td>
				</tr>
				
						<?php
							if(isset($_GET["y"]))
								{
						?>
									<font color="Red">Old password doesn't match</font>
						<?php
								}
						?>
						
					<tr>
					<td>Enter New Password</td>
						<td><input type="password" name="t2">
					</td>
					
<tr>
<td>Re-Enter New Password</td>
<td>
<input  type="password" name="t3"></td>
					</tr>
						<?php
								if(isset($_GET["x"]))
								{
						?>
									<font color="Red">New Password and Re-enter password doesn't match</font>
						<?php
								}
						?>
						
						<tr><td><input type="submit" value="Change Password" /><td>
									<!-- <a href="welcome_compounder.php"><input type="button" value="Cancel" class="btn btn-warning" style="height:40px;width:150px; margin-left:37px "/></a> -->
			</table>		
				</form>
			</body>
</html>

<?php
		
		include("footer.php");
       }
       else
	{
		header("Location:login.php");
	}
?>
