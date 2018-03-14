<html>
<?php
require_once 'config.inc.php';
session_start();
$name = $_SESSION['name'];
echo "Welcome <strong>".$name."</strong><br>";
$roll = $_SESSION['roll'];
$query = "SELECT * FROM data WHERE ROLL_ID = '$roll'";
	$result = mysqli_query($con,$query);
	$res = array();
	while($r = mysqli_fetch_assoc($result))
		$res[] = $r;
	echo'<table><thead>
	<tr><th>ID </th><th>INPUT1 </th><th>INPUT1</th></tr>
	<thead><tbody>';
	foreach($res as $row){
		echo '<tr><td>'.$row['ID'].' </td>';
		echo '<td>'.$row['INPUT1'].' </td>';
		echo '<td>'.$row['INPUT2'].' </td></tr>';
	}
	echo '</tbody></table>';
	
	echo '<a href = "logout.php" >Click here to logout</a>';
?>

</html>