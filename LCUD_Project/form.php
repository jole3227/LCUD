<!-- Connects to the database -->
<?php
 include "connectdb.php"
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Downloads relevant content -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<title>Set Up form</title>
</head>
<!-- Creates a dropdown menu for creating a Container, redirects to relevant page for next input -->
<body style="color: black; background-color: rgb(229, 229, 229); background-image: url(images/bg.jpg);" alink="#000099" link="#000099" vlink="#a700a7">
	<br><br><br><br>
	<div class="container">
  		<div class="row">
  		<p>Select a shape: <br></p>
    		<div class="col-lg">
				<div class="dropdown">
  					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					----------    		
  					</button>
					<!-- Drop down options -->
  					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
 						<a class="dropdown-item" href="./cubeform.php">Cube</a>
  						<a class="dropdown-item" href="./cuboidform.php">Cuboid</a>
   					<a class="dropdown-item" href="./cylinderform.php">Cylinder</a>
  					</div>
				</div>
			</div>
		</div>
		<br><br><br><br>
		<div class="row">
			<div class = "col-lg">
				<!-- Return to index.php -->
				<a href="./index.php"> <button type="button" class="btn btn-primary">Go Back</button></a>
			</div>		
		</div>
	</div>
</body>
</html>
