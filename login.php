<?php
	include("visitorheader.php");
  	include("dbconnection.php");  
?>

<h2>Login</h2>


<form action="checklogin.php" method="post">
<font color="white" size="3"><b>
<table>
	<tr>
		<td>&nbsp;</td>
		<td align="right"> <a href="company_signup.php">Signup</a></td>
	</tr>
	<tr>
 		<td>Login Id</td>
 		<td> <input type="text" name="t1" size=30px></td>
	</tr>
	<tr>
 		<td>Password</td>
 		<td> <input type="password" name="t2" size=30px></td>
	</tr>
	<tr>
 		<td>&nbsp;</td>
 		<td> <input type="submit" value="Submit">
      		<input type="reset" value="Cancel"></td>
	</tr>

	<tr>
		<td>&nbsp;</td>
		<td> <a href="forgot_password.php">Forgot Password?</a></td>
	</tr>
 
</table>
</form>
</b></font>          
<br>
<?php
  if (isset($_GET["x"]))
	{
	echo "Invalid Loginid and Password";
	}
?>

<br>

<?php
  include("visitorfooter.php");
?>