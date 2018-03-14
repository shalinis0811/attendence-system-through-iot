<?php

 if(isset($_POST['register']))
{
    register();
}

function register(){		
			require_once 'config.inc.php';
			$name = $_POST['name'];
			$roll = $_POST['roll'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			
		$query = "Insert into students (NAME,ROLL_ID,EMAIL, PASSWORD) values('$name', '$roll', '$email', '$password')";
		$res = mysqli_query($con,$query);
		
		if ($res){		
			echo "Successfully registered".'<br>';
			echo "<a href = 'login.html'>Click here to login</a>";
		}
		else{
			echo "Parameters Missing";
		}
	}
?>