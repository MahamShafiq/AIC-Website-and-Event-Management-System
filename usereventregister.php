<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'aiceventdatabase'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
session_start();

$ide= $_SESSION["username"];
$q = "SELECT * FROM `myuser` WHERE `Username`='$ide'";

$query = mysqli_query($conn, $q);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

while ($row = mysqli_fetch_array($query))
		{	
			
			
				
					$id=  $row['User_ID'];
					$name= $row['First_Name'];
					$lname= $row['Last_Name'];
					$no=$row['Contact_No'];
					$cnc=$row['CNIC_No'];
					$email= $row['Username'] ;
					$inst= $row['Institute'] ;
					$dept= $row['Department'] ;
					 $ds=$row['DS_Experience'];
					 $ai=$row['Programming_Experience'];
		}
		$q="SELECT * FROM `event` ORDER BY Event_ID DESC";
$query = mysqli_query($conn, $q);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

while ($row = mysqli_fetch_array($query))
		{	
			
					$id=  $row['Event_ID'];
					
					}
					echo"$name";
		
	$sql="INSERT INTO `event registration`(`Registration_No`, `Event_ID`, `User_ID`, `Username`, `Contact_No`, `Experience`) VALUES (NULL,'5','$email','$name','$no','$ai')";
	
	$d=mysqli_query($conn,$sql);


           if($conn->query($sql)){
				header('location:loginpage.php');
				
							
			}
	else
	{header('location:admin.php');
    }
	?>