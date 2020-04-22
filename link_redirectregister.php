<?php
$First_Name = filter_input(INPUT_POST, 'First_Name');
$Last_Name = filter_input(INPUT_POST, 'Last_Name');
$Contact_No = filter_input(INPUT_POST, 'Contact_No');
$CNIC_No = filter_input(INPUT_POST, 'CNIC_No');
$Username = filter_input(INPUT_POST, 'Username');
$Institute = filter_input(INPUT_POST, 'Institute');
$Department = filter_input(INPUT_POST, 'Department');
$DS_Experience = filter_input(INPUT_POST, 'DS_Experience');
$Programming_Experience = filter_input(INPUT_POST, 'Programming_Experience');
	if(!empty($First_Name)){
		if(!empty($Last_Name)){
			if(!empty($Contact_No)){
				if(!empty($CNIC_No)){
				    if(!empty($Username)){
						  if(!empty($Institute)){
						     if(!empty($Department)){
							   if(!empty($DS_Experience)){
	                             if(!empty($Programming_Experience))
								 {
	session_start();
		$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="aiceventdatabase";
		//create connection
		$conn = new mysqli ($host,$dbusername, $dbpassword, $dbname);
		if (mysqli_connect_error())
		{
			die('Connect Error ('. mysqli_connect_errno() .')'
			. mysqli_connect_error());
		}
		else{
			$sql ="UPDATE `myuser` SET `First_Name`='$First_Name',`Last_Name`='$Last_Name',`Contact_No`='$Contact_No',`CNIC_No`='$CNIC_No',`Institute`='$Institute',`Department`='$Department',`DS_Experience`='$DS_Experience',`Programming_Experience`='$Programming_Experience' WHERE Username='$Username'";
$_SESSION["username"]="$Username";
		if($conn->query($sql)){
				header('location:loginpage.php');
				
							
			}
				else{
				echo "Error: ". $sql ."<br>". $conn->error;
				header('location:info.php');
			}
		$conn->close();
		}
		
	}
	else{
		echo "Programming Experience should not be empty";
		die();
	}
	 }
	else{
		echo "DS Experience should not be empty";
		die();
	}
	}
	else{
		echo "Department should not be empty";
		die();
	}
	 }
	else{
		echo "Institute should not be empty";
		die();
	}
		}
	else{
		echo "Email should not be empty";
		die();
	}
	}
	else{
		echo "CNIC No should not be empty";
		die();
	}
	}
	else{
		echo "Contact No should not be empty";
		die();
	}
	}
	else{
		echo "Last Name should not be empty";
		die();
	}
			}

else{
	echo "First Name should not be empty";
	die();
}
?>