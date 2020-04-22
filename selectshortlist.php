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
	$a=$id;
}
echo "$a";
		
$sql = "SELECT * FROM `event registration` WHERE Registration_No=$a";
$query = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($query))
		{	
			
					$id=  $row['User_ID'];
		$Event_ID=  $row['Event_ID'];
					
					}
					
					echo "$Event_ID";
$sql2 = "SELECT * FROM `myuser` WHERE `Username`='$id'";
$query = mysqli_query($conn, $sql2);
while ($row = mysqli_fetch_array($query))
		{	
			
					$name= $row['First_Name'];
					
					}		
ECHO "$name";					
$sql="INSERT INTO `shortlist`(`Registration_No`, `Event_ID`, `User_ID`, `username`, `Candidate_No`) VALUES ('$a','$Event_ID','$id','$name',NULL)";		
	$query = mysqli_query($conn, $sql);				


	header('location:admincorner.php');



?>

