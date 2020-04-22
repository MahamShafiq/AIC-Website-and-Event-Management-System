<?php
// require'dbconfig/config.php';
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
		$_SESSION["Email"]="$email";
		$q="SELECT * FROM `team` WHERE Team_ID='$teamid'";
$query = mysqli_query($conn, $q);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

while ($row = mysqli_fetch_array($query))
		{	
			
			
				
					$team=$row['Team_Name'];
		}
					
?>
<!DOCTYPE html>
<html>
<head>
<title>Event Registration </title>
<meta charset="UTF-8" > 
	<!-- for responsiveness-->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!--jQuery for scrolling animation -->
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<!-- Bootstrap JS --> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	
	<!-- css stylesheet-->
	<link rel="stylesheet" href="css/custom.css">

	<!-- for fonts
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat" >
	-->
	<!-- Google Fonts Link for Merriweather and Merriweather Sans-->
	<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700|Merriweather:700" rel="stylesheet">

	<!-- for font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
	<!-- Popper JS for Bootstrap -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	
	</head>

<body>

	

	<!--NAVBAR
	<!-- In a separate div from the rest of the content, so you can change this without affecting the rest of the page-->
	<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
  		<a class="navbar-brand" href="#">
	    <img src="image/logo.png" width="150" height="50" class="d-inline-block align-top img-fluid">
  		</a>
<h2>Artificial Intelligence Club</h2>
		<!--Hamburger Icon for collapsing NavBar on smaller devices-->
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
		</button>

	  	<!-- Everything in this div will collapse when hamburger icon is pressed -->
	  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav ml-auto">
	    	<li class="nav-item text-center">
	
  
  <div class="dropdown">
  <button class="dropbtn"><?php echo $name; ?>
  <img src="avatar.jpg" alt="Avatar" class="avatar">


  </button>
  <div class="dropdown-content">
    <a href="team_reg.php">Log Out</a>
    
    <a href="https://www.facebook.com/aiclubned/" >Help</a>
	
		
  </div>
</div>


</div>
	    	</li>
	    	
	 	      
			  
	 	     
		    </ul>
		  </div>
	</nav>
	
	<div class="row">
  <div class="leftcolumn">
    <div class="card", style="background-image:pattern4.jpg">
	<h2>REGISTER YOURSELF!</h2>
 <div class="fakeimg" style="height:400px;"><img src="upcoming.jpg"></div>
		
      <h2>Particulars</h2>
      <p><b>Verify your particulars to confirm your registration for our event</b></p>
      <img src="avatar1.png" alt="Avatar" class="avatar">
	
			
				<I><h4 style="color:black"><center> Name:  <?php echo "$name".' '."$lname"?></h4>	</i>
                <I><h4 style="color:black"><center> Department:  <?php echo "$dept"?></h4>	</i>
				<I><h4 style="color:black"><center> Email:  <?php echo "$email"?></h4>	</i>
				<I><h4 style="color:black"><center> Contact No: +92- <?php echo "$no"?></h4>	</i>
				<I><h4 style="color:black"><center> Designation:  <?php echo "$des"?></h4>	</i>
				<I><h4 style="color:black"><center> DS Experience:  <?php echo "$ds"?> years</h4>	</i>
				<I><h4 style="color:black"><center> AI Experience:  <?php echo "$ai"?> years</h4>	</i>
				<I><h4 style="color:black"><center> Team Name:  <?php echo "$team"?></h4>	</i>
				
				




             <form class="myform" action="eventregister.php" method="post"> 

				
			<input name="submit_btn" type="submit" id="signup_btn" value="Register" "/><br><br><br>
      
    </div>
    
 


  
 
  
  
</div>
</div>
</br>
</br>
</br>
</br>

      
    
   
</div>

<link rel="stylesheet" href="css/style.css">
</head>
<body background="pattern2.jpg">

      <div id="main-wrapper">
	  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700|Merriweather:700" rel="stylesheet">
<br>
         
			 </div>
	   
	 
	 <style>
	 
		
.dropbtn {
    background-color: blue;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: none;}
.avatar {
    vertical-align: middle;
    width: 50px;
    height: 50px;
    border-radius: 50%;
}
.dropbtn1 {
    background-color: black;
    color: white;
    padding: 16px;
    font-size: 20px;
    border: none;
}
* {
    box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
    font-family: Arial;
    padding: 20px;
    background: #f1f1f1;
}

/* Header/Blog Title */
.header {
    padding: 30px;
    font-size: 40px;
    text-align: center;
    background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
    float: left;
    width: 75%;
}

/* Right column */
.rightcolumn {
    float: left;
    width: 25%;
    padding-left: 20px;
}

/* Fake image */
.fakeimg {
    background-color: white;
    width: 35%;
    padding: 20px;
}


/* Add a card effect for articles */
.card {
     background-color: white;
     padding: 20px;
     margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Footer */
.footer {
    padding: 20px;
    text-align: center;
    background: #ddd;
    margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
    .leftcolumn, .rightcolumn {   
        width: 100%;
        padding: 0;
    }
}

</div>
</div>
	 </style>
	 </div>
	  <!---Footer---->
 <footer>
      <p>
      	<a href="https://www.facebook.com/aiclubned/" target="_blank">
      		<i class="fa fa-facebook-square" aria-hidden="true" style="font-size:24px"></i>
      	</a>	
      Artificial Intelligence Club, Copyright &copy; 2018</p>
    </footer>
 
 <!---End Footer----> 

</body>
</html>
	 