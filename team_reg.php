<?php
// require'dbconfig/config.php';

?>
<!DOCTYPE html>
<html>
<head>
<title> Member's Portal </title>
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

		<!--Hamburger Icon for collapsing NavBar on smaller devices-->
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
		</button>

	  	<!-- Everything in this div will collapse when hamburger icon is pressed -->
	  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav ml-auto">
	    	<li class="nav-item text-center">
	    		<a class="nav-link active" href="index.html">Home</a>
	    	</li>
	    	<!--Current Tab should be highlighted so using active -->
			<li class="nav-item text-center">
		        <a class="nav-link" href="register.php">Sign up</a>
		      </li>
		      <li class="nav-item text-center">
		      	<a class="nav-link" href="reg_login.php">Sign in</a>
	 	      </li>
	 	  	  <li class="nav-item text-center">
		      	<a class="nav-link" href="events.html">Our Events</a>
	 	      </li>
	 	      <li class="nav-item text-center">
		      	<a class="nav-link" href="team_reg.php">Team Members</a>
	 	      </li>
			  
	 	      
			  
	 	     
		    </ul>
		  </div>
	</nav>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<link rel="stylesheet" href="css/style.css">
</head>
<body background="pattern4.jpg">
      <div id="main-wrapper">
	  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700|Merriweather:700" rel="stylesheet">
<br>
         <center>
            <h2>Member's Portal</h2>
             <img src="image/Data Science 2 420x250.png" class="DataScience2420x250"/><br>
         </center>

       
             <form class="myform" action="redirectteam_reg.php" method="post"> <br> <br>
               <label>Email: </label><br>
	           <input name="email" type="email" class="inputvalues" placeholder="Type your username" required/><br>
	           <label>PASSWORD:</label><br>
	           <input name="password" type="password" class="inputvalues" placeholder="Type your password" required/><br>
			    
			   <input name="submit_btn" type="submit" id="signup_btn" value="Log in"/><br><br><br>
			   
             </form>
			 <?php
			 
			 ?> 
			 <br>
       </div>
	   
	   <br><br>
	   <link rel="stylesheet" type="text/css" href="events_styles.css">
<div class="jumbotron">
  		<center>
            <h1 style="color:white;font-family:verdana">Admin's Corner</h1>
			<hr>
             <img src="image/admin.jpg" class=".admin"/><br><br>
         </center>
  		<p class="lead">
			<a class="btn btn-secondary btn-md" href="admin.php" role="button">Login to Admin's Portal</a>
    		
  		</p>
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