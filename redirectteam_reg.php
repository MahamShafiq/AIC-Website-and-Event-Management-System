<?php
session_start();
$con=mysqli_connect('localhost','root');
if($con)
	
	{
	
		
	}else
	{echo "no connection";
	}
mysqli_select_db($con,'aiceventdatabase');
$email=$_POST['email'];
$password=$_POST['password'];
$q="SELECT * FROM `team members` WHERE Email='$email'&& Password='$password'";
mysqli_query($con,$q);
	$result=mysqli_query($con,$q);
	$num = mysqli_num_rows($result);
	if($num>=1)
	{ 
		$_SESSION["email"]="$email";
		
		header('location:memberloginpage.php');
		
		
		
		
		
	}
	else
	{echo "Incorrect Username or Password";
header('location:team_reg.php');
    }
	?>