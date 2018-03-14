<?php 
require_once 'config.inc.php';


session_start();

$user_id = $_SESSION['user_id'];

//echo $user_id;

if( $_POST['ip_date']){

$ip = $_POST['ip_date'];
		get_date();
		//echo $ip;
}
function get_date(){
	
	  global $ip,$user_id,$con;

	
		$newDate = date("Y-m-d", strtotime($ip));
     //echo $newDate;
		$query = "SELECT CAST(date_time AS time) date_time, CAST(last_swipe AS time) last_swipe, hours from emp_log where emp_id = '$user_id' and CAST(date_time AS DATE) = '$newDate'";
  
//echo $query;  
					  $result = mysqli_query($con,$query);
							   
							   //print_r($result);
		 $row=mysqli_fetch_assoc($result);
		 
		 print_r(json_encode($row));
		
	//return json_encode($row);
}
 

?>