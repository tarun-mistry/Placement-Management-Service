<?php
    include("dbconnection.php");
    $id=$_GET["x"];
    $s=$_GET["y"];
    $con->query("update company set rstatus='$s' where company_id='$id'");
  header("Location:company.php");
?>                                                      