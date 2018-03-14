<?php
 if(isset($_POST['login']))
{
    login();
}

function login(){
	require_once 'config.inc.php';

	$email = $_POST["email"];
	$password = $_POST["password"];

	$query = "SELECT * FROM students WHERE email = '$email'";
	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_assoc($result);

	if($row["EMAIL"]==$email && $row["PASSWORD"]==$password){
		session_start();
		$_SESSION['email'] = $email;
		$_SESSION['name'] = $row["NAME"];
		$_SESSION['roll'] = $row["ROLL_ID"];
		
		header('Location:welcome.php');
		}
	else{
		echo "<script type = 'text/javascript'>alert('Invalid login credentials') </script>";
		echo "<script>window.location='login.html'</script>";
		}
	
}

?>