<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'aiceventdatabase'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$id='';
if(!empty($_GET['id']))
{
	$id=$_GET['id'];
	echo $id;
}
$id=intval($id);
		
if($id==1) echo "yes";

	$sql="DELETE FROM `attendee` WHERE`Attendee_No`='$id'";
	$conn->query($sql);
	header('location:admin_attendee.php');



?>

