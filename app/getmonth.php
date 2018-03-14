<?php 
require_once 'config.inc.php';


session_start();

$user_id = $_SESSION['user_id'];

//echo $user_id;


   $month=date('m', time());
                

		$q = "SELECT count(*) cnt, emp_id FROM emp_log where emp_id = '$user_id' and DATE_FORMAT(date_time,'%m') = '$month'";
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
							//print_r($month);
							$days= $count;  
						    $query="INSERT INTO `month_log`(`emp_id`, `total_days`,`month`) VALUES ('$user_id',$days,$month)";
							
							$res = mysqli_query($con,$query);
							
						} elseif($count>=1){
							$days=$count;
							$query="UPDATE `month_log` SET total_days = '$days' where emp_id = '$user_id'";
							$res = mysqli_query($con,$query);
						}
?>