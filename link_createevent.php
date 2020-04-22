<?php
session_start();
$con=mysqli_connect('localhost','root');
if($con)
	
	{
	
		
	}else
	{echo "no connection";
	}
mysqli_select_db($con,'aiceventdatabase');

$Event_Name = $_POST['Event_Name'];
$Event_Venue = $_POST['Event_Venue'];
$Event_Head = $_POST['Event_Head'];
$Event_City = $_POST['Event_City'];
$Start_Time = $_POST['Start_Time'];
$End_Time = $_POST['End_Time'];
$Start_Date = $_POST['Start_Date'];
$End_Date = $_POST['End_Date'];
$Budget_Allocated = $_POST['Budget_Allocated'];
$Distribution = $_POST['Distribution'];
$Purpose = $_POST['Purpose'];
$Amount = $_POST['Amount'];
$Purchase_Date = $_POST['Purchase_Date'];
$Judge= $_POST['Judge'];
$Prizes= $_POST['Prizes'];
$Speaker= $_POST['Speaker'];
$Payment = $_POST['Payment'];
$Lunch = $_POST['Lunch'];
$Certificate = $_POST['Certificate'];
$Seats = $_POST['Seats'];
$Seats_Left =$_POST['Seats_Left'];
$Type_Id =$_POST['Type_Id'];


$sql ="INSERT INTO `event` (`Event_ID`, `Event_Venue`, `Event_Name`, `Event_Head`, `Event_City`,`Type_Id`) VALUES (NULL, '$Event_Venue', '$Event_Name', '$Event_Head', '$Event_City','$Type_Id')";
		
    $query=mysqli_query($con,$sql);
		 
$q="SELECT * FROM `event` WHERE Event_Name='$Event_Name'";
$query = mysqli_query($con, $q);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($con));
}

while ($row = mysqli_fetch_array($query))
		{	
			
			
				
					$id=$row['Event_ID'];
		}
		echo $Start_Date;
$sql="INSERT INTO `event info`(`Event_ID`, `Start_Time`, `End_Time`, `Start_Date`, `End_Date`) VALUES ('$id','$Start_Time','$End_Time','$Start_Date','$End_Date')";					
	
$a=mysqli_query($con,$sql);
$sql="INSERT INTO `expenditures`(`Event_ID`, `Budget_Allocated`, `Distribution`, `Purpose`, `Amount`, `Purchase_Date`) VALUES ('$id','$Budget_Allocated ','$Distribution', '$Purpose', '$Amount','$Purchase_Date')";

		
$b=mysqli_query($con,$sql);
$sql="INSERT INTO `misc`(`Event_ID`, `Judge`, `Prizes`, `Speaker`) VALUES ('$id','$Judge','$Prizes','$Speaker')";
$c=mysqli_query($con,$sql);
$sql="INSERT INTO `paid event`(`Event_ID`, `Payment`, `Lunch`, `Certificate`) VALUES ('$id','$Payment','$Lunch','$Certificate')";

$d=mysqli_query($con,$sql);


           if($con->query($sql)){
				header('location:admincorner.php');
				
							
			}
	else
	{header('location:admin.php');
    }
	?>