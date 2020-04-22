<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'aiceventdatabase'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
session_start();


$q="SELECT * FROM `team members` WHERE Email='{$_SESSION["email"]}'";
$query = mysqli_query($conn, $q);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

while ($row = mysqli_fetch_array($query))
		{	
			
			
				
					$id=  $row['Member_ID'];
					
					$password=$row['Password'];
					$teamid=$row['Team_ID'];
					$name= $row['First_Name'];
					$lname= $row['Last_Name'];
					$dept= $row['Department'] ;
					$email= $row['Email'] ;
			        $year= $row['Year'];
					 $no=$row['Contact_No'];
					 $des=$row['Designation'];
					 $ds=$row['DS_Experience'];
					 $ai=$row['AI_Experience'];
		
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
				header('location:memberloginpage.php');
				
							
			}
	else
	{header('location:admin.php');
    }
	?>