<?php
session_start();
$con=mysqli_connect('localhost','root');
if($con)
	
	{
	
		
	}else
	{echo "no connection";
	}
mysqli_select_db($con,'aiceventdatabase');
$username=$_POST['username'];
$password=$_POST['password'];
$q=" SELECT * FROM admin where username='$username' && password='$password'";
mysqli_query($con,$q);
	$result=mysqli_query($con,$q);
	$num = mysqli_num_rows($result);
	if($num>=1)
	{
		
		header('location:admincorner.php');
		
		
		//costart from here
		
		
	}
	else
	{header('location:admin.php');
    }
	?>