<?php 
require_once 'config.inc.php';


session_start();

$user_id = $_SESSION['user_id'];

show_year();
function show_year(){
	
	global $user_id;
	global $con;


 $month=date('m', time());
 
 
 //echo $month;

   $query="SELECT `total_days`, `month` FROM `month_log` WHERE emp_id = $user_id ";
  // echo $query;
   $row= array();
  // print_r($query);
   $result = mysqli_query($con,$query);
          // print_r($result);
		 while(  $r=mysqli_fetch_assoc($result))
		 {
							$row[]=$r;
		 }
		 
 // print_r($row);
  
  /*
      $w_days =($row['total_days']);
	  //echo $w_days;
	  $dt = DateTime::createFromFormat('!m', $row['month']);
     $mn=$dt->format('F');
   
   
    //date
	 $mon = array("num"=>$w_days,"month"=>$mn);*/
	 print_r(json_encode($row));
   
 
}   
?>