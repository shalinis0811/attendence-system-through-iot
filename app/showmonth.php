<?php 
require_once 'config.inc.php';


session_start();

$user_id = $_SESSION['user_id'];


if( $_POST['ip_date']){

$ip = $_POST['ip_date'];
		
		//echo $ip;
		show_month();
}


function show_month(){
	
	global $user_id,$ip;
	global $con;


 

 $date = $ip;
    $month = date('m',strtotime($date));
//$month =$d["month"];
  //echo time();
 
//echo $month;

   $query="SELECT `date_time`, `last_swipe`, `hours` FROM `emp_log` WHERE emp_id= $user_id and DATE_FORMAT(date_time,'%m') = '$month'";
   
  //print_r($query);
     $row= array();
 
   $result = mysqli_query($con,$query);
          // print_r($result);
		    while(  $r=mysqli_fetch_assoc($result))
		 {
							$row[]=$r;
		 }
		 
		
		 
						
 print_r(json_encode($row));
  /*
      $w_days =($row['total_days']);
	  //echo $w_days;0
	  $dt = DateTime::createFromFormat('!m', $row['month']);
     $mn=$dt->format('F');
   
   
    //date
	 $mon = array("num"=>$w_days,"month"=>$mn);
	 print_r(json_encode($mon));   */
	 
	 
   
 
}   
?>