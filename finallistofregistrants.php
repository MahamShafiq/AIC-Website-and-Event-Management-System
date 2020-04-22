<?php
// require'dbconfig/config.php';

?>
<!DOCTYPE html>
<html>
<head>
<title> Admin Portal </title>
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
            <h2>Admin's Portal</h2>
			
			
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
	
	
	
	
	<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'aiceventdatabase'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * FROM `event registration` ';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

?>
<html>
<head>
	<title>Displaying List of Registrants</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
			
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #5DADE2  ;
			border-color: #17202A;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #E5E8E8;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #EAECEE  ;
		}
	</style>
</head>
<body>
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700|Merriweather:700" rel="stylesheet">
<br>
	<h3 style="color:black;"><center><b>List of Registrants</b></center></h3>
	<caption class="title">following are the registrants</caption>
		
	<table class="data-table">
		<thead>
			<tr >
			
				<th>Registration Number</th>
				<th>First Name</th>
				<th>Contact</th>
				<th>Username</th>
				<th>Programming Experience</th>
				<th>Action</th>
				
			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		$total 	= 0;
		$id=array();
		while ($row = mysqli_fetch_array($query))
		{	
			
			?>
			<tr bgcolor="#f4fbff">
				
					<td><?php echo $row['Registration_No'];$id[$no]=$row['Registration_No']?></?></td>
					
					
					<td><?php echo $row['Username']?></td>
					<td><?php echo $row['Contact_No'] ?></td>
					<td><?php echo $row['User_ID']?></td>
					<td><?php echo $row['Experience']?></td>
				
					
					
					<td><a href="selectshortlist.php?id=<?php echo $id[$no]?>">Shortlist</a></td>
					
					
				
					
				</tr>
		<?php $no++; }?>
		
		</tbody>
		<tfoot>
			<tr>
				<th colspan="4">Total Registrants</th>
				<th><?=number_format($no-1)?></th>
			</tr>
		</tfoot>
	</table>
</body>
</html>




	
 </body>
 </html>