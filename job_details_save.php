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
  
  //include("database.php");
set_time_limit(0);
ini_set('memory_limit', '-1');
ini_set("max_execution_time","0");
//error_reporting(0);
$user_id = 1;
echo "<pre>";
print_r($_REQUEST);

$req_id=$_REQUEST["id_ref_no"];

$styleRes	= mysqli_query($con,"SELECT max(order_no) as max_cnt FROM order_details");
$itm_des	= mysqli_fetch_assoc($styleRes);
if($itm_des['max_cnt']>0){
$max_cnt=$itm_des['max_cnt']+1;
}
else{
$max_cnt=1;
} 

$trialDate=date("Y-m-d", strtotime($_REQUEST["trialDate"]));
$deliveryDate=date("Y-m-d", strtotime($_REQUEST["deliveryDate"]));

$insrt_qry = mysqli_query($con,"insert into order_details (firstname,lastname,mobile_number,sms_text,order_status,
							modified_by,modified_date,created_by,created_date,order_no,trial_date,delivery_date) 
						values
						('{$_REQUEST['firstname']}','{$_REQUEST['lastname']}','{$_REQUEST['mobileno']}','{$_REQUEST['smsText']}',1,'{$user_id}',now(),'{$user_id}',now(),$max_cnt,
						'{$trialDate}','{$deliveryDate}')
						");
						 
					 
						 
$last_insert_id=mysqli_insert_id($con);		
if($last_insert_id>0){				
for ($ii = 0; $ii <= $req_id; $ii++) {	 

	if ( isset($_REQUEST["input_".$ii]) ) {
		  
		$insrt_qry_item = mysqli_query($con,"insert into item_details (order_id,item_name,
							modified_by,modified_date,created_by,created_date) 
						values
						('{$last_insert_id}','{$_REQUEST["input_".$ii]}','{$user_id}',now(),'{$user_id}',now())
						");	
						 	
				}
			}			
			
				$curl = curl_init();
					curl_setopt_array($curl, array(
				    CURLOPT_RETURNTRANSFER => 1,
				    CURLOPT_URL => 'http://www.pointsms.in/API/sms.php',
				    CURLOPT_USERAGENT => 'Codular Sample cURL Request',
				    CURLOPT_POST => 1,
				    CURLOPT_POSTFIELDS => array(
				        username => 'satguruajmer',
				        password => 'satguruajmer@123',
				        from => 'STGURU',
				        to => $_REQUEST['mobileno'],
				        msg => $_REQUEST['smsText'],
				        type => '1',
				        dnd_check => '0',
				    )
				));
				//$resp = curl_exec($curl);
				curl_close($curl);			
			}			 
			//exit;
	
header("Location: index.php")

?>