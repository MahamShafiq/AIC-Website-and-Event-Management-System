<!DOCTYPE html>
<html>
<head>
<title> USER INFO PAGE </title>

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
		      	<a class="nav-link" href="reg_login">Login</a>
	 	      </li>
	 	  	  <li class="nav-item text-center">
		      	<a class="nav-link" href="events.html">Our Events</a>
	 	      </li>
	 	      <li class="nav-item text-center">
		      	<a class="nav-link" href="team_reg.php">Members Portal</a>
	 	      </li>
			  
	 	      
			  
	 	     
		    </ul>
		  </div>
	</nav>
	
	
	
<link rel="stylesheet" href="css/style.css">
</head>
<body background="bg.jpg">
      <div id="main-wrapper">
         <center>
            <h2>ENTER YOUR INFORMATION</h2>
             <img src="image/Data Science 2 420x250.png" class="DataScience2420x250"/><br>
         </center>

       
             <form class="myform" action="link_redirectregister.php" method="post"> <br> <br>
               <label>FIRST_NAME: </label><br>
	           <input name="First_Name" type="text" class="inputvalues" placeholder="Type your first name" required/><br>
			    <label>LAST_NAME: </label><br>
	           <input name="Last_Name" type="text" class="inputvalues" placeholder="Type your last name" required/><br>
	           <label>CONTACT_NUMBER:</label><br>
	           <input name="Contact_No" type="tel" class="inputvalues" placeholder="Type your contact number" required/><br>
               <label>CNIC_NO: </label><br>
	           <input name="CNIC_No" type="number" class="inputvalues" placeholder="Type your cnic# in the form *****-*******-*" required/><br>
                <label>INSTITUTE: </label><br>
	           <input name="Institute" type="text" class="inputvalues" placeholder="Type your institute/organization" required/><br>
                <label>DEPARTMENT: </label><br>
	           <input name="Department" type="text" class="inputvalues" placeholder="Type your department" required/><br>
              <label>USERNAME: </label><br>
	           <input name="Username" type="email" class="inputvalues" placeholder="Type your email" required/><br>
                <label>DS EXPERIENCE: </label><br>
	           <input name="DS_Experience" type="number" class="inputvalues" placeholder="Type your experience" required/><br>	
               <label>PROGRAMMING EXPERIENCE: </label><br>
	           <input name="Programming_Experience" type="number" class="inputvalues" placeholder="Type your experience" required/><br>			   
			   <input name="submit_btn" type="submit" id="signup_btn" value="SUBMIT"/><br>
			   <input type="button" id="back_btn" value="<< Back"/>
             </form>
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