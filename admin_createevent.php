

<?php
// require'dbconfig/config.php';

?>
<!DOCTYPE html>
<html>
<head>
<title> Create Event </title>
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
<body background="pattern2.jpg">
      <div id="main-wrapper">
	  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700|Merriweather:700" rel="stylesheet">
<br>
         <center>
            <h2>Create Event</h2>
			
			
			</center>
			 </div>
	   
	 <head>
	 <style>
	 .menudropdown1{
		 position: right;
		 
		 width: 420px;
		 height: 100px;
		 margin: 20px auto;
		 }
		 
		 .menudropdown1 ul{
			 padding: 0px;
			 
		 }
		 
		 .menudropdown1 ul li{
			 position: right;
			 margin: 10px;
			 float: center;
			 background-color:white;
			 color: black;
			 width: 400px;
			 height: 100px;
			 line-height: 100px;
			 font-size:18px;
			 text-align: center;
			 opacity: 0.7;
			  list-style:none;
			  line-margin: 10px;
			  
		 }
		 .menudropdown1 ul li ul{
			 display: none;
		 }
		 .menudropdown1 ul li:hover > ul {
			 display: block;
		 }
		 .menudropdown1 ul li:hover{
			 background-color: gray;
			 opacity: 0.8;
		 }
	 </style>
	
<!DOCTYPE html>
<html>
<head>
<title> CREATE EVENT</title>

	
<!--FORM CODING-->	
	
<link rel="stylesheet" href="css/style.css">
</head>
<body background="2.png">
      <div id="main-wrapper">
	  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700|Merriweather:700" rel="stylesheet">
<br>
         <center>
            
             <img src="image/images.jpg" class="DataScience2420x250"/><br>
         </center>

       
             <form class="myform" action="link_createevent.php" method="post"> <br> <br>
               <label>EVENT NAME: </label><br>
	           <input name="Event_Name" type="text" class="inputvalues" placeholder="Type your event name" required/><br>
	           <label>EVENT VENUE:</label><br>
	           <input name="Event_Venue" type="text" class="inputvalues" placeholder="Type your venue" required/><br>
			   <label>EVENT HEAD:</label><br>
	           <input name="Event_Head" type="text" class="inputvalues" placeholder="Type your head" required/><br>
			   <label>EVENT CITY:</label><br>
	           <input name="Event_City" type="text" class="inputvalues" placeholder="Type your city" required/><br>
			    <label>EVENT START TIME:</label><br>
	           <input name="Start_Time" type="text" class="inputvalues" placeholder="Type time" required/><br>
			     <label>EVENT END TIME:</label><br>
	           <input name="End_Time" type="text" class="inputvalues" placeholder="Type time" required/><br>
			   <label>EVENT START DATE:</label><br>
	           <input name="Start_Date" type="date" class="inputvalues" placeholder="Type date" required/><br>
			     <label>EVENT END DATE:</label><br>
	           <input name="End_Date" type="date" class="inputvalues" placeholder="Type date" required/><br>
			   <label>BUDGET ALLOCATED:</label><br>
	           <input name="Budget_Allocated" type="number" class="inputvalues" placeholder="Type budget" required/><br>
			   <label>DISTRIBUTION:</label><br>
	           <input name="Distribution" type="text" class="inputvalues" placeholder="Type distribution" required/><br>
			   <label>PURPOSE:</label><br>
	           <input name="Purpose" type="text" class="inputvalues" placeholder="Type purpose" required/><br>
			   <label>AMOUNT:</label><br>
	           <input name="Amount" type="number" class="inputvalues" placeholder="Type amount" required/><br>
			   <label>PURCHASE DATE:</label><br>
	           <input name="Purchase_Date" type="date" class="inputvalues" placeholder="Type date" required/><br>
			   <label>JUDGE:</label><br>
	           <input name="Judge" type="text" class="inputvalues" placeholder="Type judge" required/><br>
			   <label>PRIZES:</label><br>
	           <input name="Prizes" type="text" class="inputvalues" placeholder="Type prize" required/><br>
			   <label>SPEAKER:</label><br>
	           <input name="Speaker" type="text" class="inputvalues" placeholder="Type speaker" required/><br>
			   <label>PAYMENT:</label><br>
	           <input name="Payment" type="number" class="inputvalues" placeholder="Type payment" required/><br>
			   <label>LUNCH:</label><br>
	           <input name="Lunch" type="TEXT" class="inputvalues" placeholder="yes or no" required/><br>
			   <label>CERTIFICATE:</label><br>
	           <input name="Certificate" type="TEXT" class="inputvalues" placeholder="yes or no" required/><br>
			  <label>SEATS:</label><br>
	           <input name="Seats" type="number" class="inputvalues" placeholder="Type your total seats " required/><br>
			  <label>SEATS LEFT:</label><br>
	           <input name="Seats_Left" type="number" class="inputvalues" placeholder="Type your seats available" required/><br>
			  <label>Type of Event:</label><br>
	           <input name="Type_Id" type="number" class="inputvalues" placeholder="Ener Type id" required/><br>
			  
			  Click ok when done
			  <input name="submit_btn" type="submit" id="signup_btn"    value="OK"/><br><br>
			  <input type="button" id="back_btn"    value="<<BACK"/><br><br>
			  
		
			   <br><br>
             </form>
			 
			 <?php
			 
			 
			 ?> 
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