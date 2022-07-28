<?php
	include("visitorheader.php");
  	include("dbconnection.php");  
?>


<h2>Login</h2>

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

<form action="checklogin.php" method="post">
<font color="white" size="3"><b>
<ol>
              <li>
	      &nbsp;
		<a href="company_signup.php" align="right">Signup</a>	
              </li>
              <li>
                <label for="text">Login Id</label>
                <input id="text" name="t1" class="text" />
              </li>
              <li>
                <label for="password">Password</label>
                <input type="password" id="password" name="t2" class="text" />
              </li>
              <li>
                <input type="image" name="imageField" id="imageField" src="images/submit.gif" class="send" />
		 <!-- <input type="image" name="imageField" id="imageField" src="images/submitc.gif" class="send" /> -->
		<div class="clr"></div>
              </li>
	      <li>
	       <a href="forgot_password.php">Forgot Password?</a>
	      </li>
            </ol>


	<!-- 
 		<td> <input type="submit" value="Submit">
      		<input type="reset" value="Cancel"></td> -->
	
 
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