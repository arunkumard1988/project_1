<?php
/*  $con = mysqli_connect("localhost","tailoring_db","samsung_wave1","tailoring_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 mysqli_select_db($con,"tailoring_db"); 
 */
   $con = mysqli_connect("localhost","root","","tailor");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  mysqli_select_db($con,"tailor"); 
  
set_time_limit(0);
ini_set('memory_limit', '-1');
ini_set("max_execution_time","0");
 

$styleRes	= mysqli_query($con,"SELECT * FROM order_details");
$i=0;
 while($styleResVal	= mysqli_fetch_assoc($styleRes)){
 //print_r($styleResVal);	 
	    $data_array[$i] ['firstname'] = ucfirst($styleResVal["firstname"]);  
	  $data_array[$i] ['lastName'] = $styleResVal["lastname"]; 
	  $data_array[$i] ['order_status'] = "Order Processing"; 
	  $data_array[$i] ['trialDate'] = date("d-M-y", strtotime($styleResVal["trial_date"])); 
	  $data_array[$i] ['deliveryDate'] = date("d-M-y", strtotime($styleResVal["delivery_date"])); 
	  $data_array[$i] ['order_no']= "TINV-".sprintf('%04d', $styleResVal['order_no']);
	  $i++;
 }
 echo json_encode($data_array, JSON_NUMERIC_CHECK);
?>