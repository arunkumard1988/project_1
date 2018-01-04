<?php
$con=mysql_connect("localhost","root","");
  if(!$con)
  {
  	  die('could not connect :' . mysql_error());
  }
mysql_select_db("tailor",$con);

/* $con = mysqli_connect("localhost","tailoring_db","samsung_wave1","tailoring_db");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  mysqli_select_db($con,"tailoring_db"); */
?>