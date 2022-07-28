<?php
   
   $photo=$_FILES["resume"]["name"];
   $id=$_REQUEST["id"];
   $photopath="resume/".$photo;
   
   move_uploaded_file($_FILES["resume"]["tmp_name"],$photopath); 

  include ("dbconnection.php");
   $con->query("update jobseeker set resume='$photopath' where rid='$id'");   

?>
