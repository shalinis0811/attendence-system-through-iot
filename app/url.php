

<?php 
require_once 'config.inc.php';
//http://localhost/workshop/url.php?api=/input1=/input2=

$data = $_GET['api'];
$arr = explode('/',$data);
// print_r($arr[1]);
$tag = explode('=',$arr[1]);
//print_r($tag[1]);
$query = "SELECT `ID` FROM `user` WHERE rfid_tag=$tag[1]";  
//echo $query;
              
						$result = mysqli_query($con,$query);
						//print_r ($result);
						
             
				while($r=mysqli_fetch_assoc($result)){
							$row=$r;
						}
					//	print_r($row);
	
	
	
	
if($row==true){
 // print_r($row);

$user_id ="";
foreach ($row as $r)
{
	$user_id=$r;
  //echo $user_id;
}
get_hours($user_id);
session_start();
$_SESSION['user_id'] = $user_id;

get_month();

// 
/*
if($result){
	//$q="INSERT INTO emp_log(emp_id) VALUES ('$user_id')";
	$result = mysqli_query($con,$q);
	//echo "inserted emp_id ".$user_id." successfully";
} */

}

		 				//	print_r($result);
						
	function get_hours(){
		
		           global $user_id;
							global $con;

						//$emp_id = $result;
						//print_r($user_id);
						
				date_default_timezone_set('Asia/Kolkata');
				$date = date('Y/m/d H:i:s', time());
				$today_date = date('Y/m/d', time());
		         $month=date('m', time());
                  //print_r($month);

		$q = "SELECT count(*) cnt, emp_id FROM emp_log where emp_id = '$user_id' and CAST(date_time AS DATE) = '$today_date'";
		//print_r($q);
			$res = mysqli_query($con,$q);
           //print_r($res);
		   while($r=mysqli_fetch_assoc($res)){
							$row=$r;
						}

                           $count =($row['cnt']);
						 // echo $count;
						  
			 if($count == 0)
			 {
				 
					$query = "INSERT INTO emp_log (emp_id, hours) values('$user_id','0')";  
					$res = mysqli_query($con,$query);
			       
						  
			 }
			    elseif($count == 1){
				 
				              
				 			  $query = "SELECT date_time FROM emp_log where emp_id = '$user_id' and CAST(date_time AS DATE) = '$today_date'";
                               $result = mysqli_query($con,$query);
                              //print_r($result);
		                     while($r=mysqli_fetch_assoc($result)){
							$row=$r;
							$ts1 =($row['date_time']);
						}
                          
						 $ts2 = $date;
						  
                         $diff = round((strtotime($ts2) - strtotime($ts1))/3600, 2);
                   
				   $query = "UPDATE emp_log SET last_swipe = '$date', hours = '$diff' where emp_id = '$user_id' and CAST(date_time AS DATE) = '$today_date'";
                     //echo $query;
					 $resultt = mysqli_query($con,$query);
						
				
				 
			    }
						  
						  
						  
						  
	}
					function get_month(){

                       global $user_id;	
                      global $con;					   
						
				     $month=date('m', time());
                 //echo $month;

		$q = "SELECT count(*) cnt, emp_id FROM emp_log where emp_id = '$user_id' and DATE_FORMAT(date_time,'%m') = 02";
		//print_r($q);                                                                
			$res = mysqli_query($con,$q);
           //print_r($res);
		   while($r=mysqli_fetch_assoc($res)){
							$row=$r;
						}

                           $count =($row['cnt']);
						 
						 
						 
						if($count==1)
						{
							$month=date('m', time());
							  // print_r($month);
							
							$q="SELECT count(*) cnt, emp_id,month FROM month_log where emp_id ='$user_id' and month=02 ";
							$res = mysqli_query($con,$q);
							$r=mysqli_fetch_assoc($res);
							//print_r($r);
							
							 $cnt=($r['cnt']);
							 //echo $cnt;
							
							if($cnt==0){
							$month=date('m', time());
							  // print_r($month);
							$days= $count;
                              //echo $days;							
						    $query="INSERT INTO `month_log`(`emp_id`, `total_days`,`month`) VALUES ('$user_id',$days,02)";
							
							$res = mysqli_query($con,$query);
							
							}
							
						} elseif($count>1){
							$month=date('m', time());
							$days=$count;
							$query="UPDATE `month_log` SET total_days = '$days' where emp_id = '$user_id' and month=02";
							$res = mysqli_query($con,$query);
						}		
						
						
					}
						
						
						
						
						
						
						
						
						
						
?>                  