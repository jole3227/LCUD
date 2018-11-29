<?php

$query = "SELECT * FROM sensor WHERE datetime = (SELECT MAX(datetime) FROM sensor)";

$result = mysqli_query($connection, $query);

if(!$query){
	die("database query failed");
}
else {
	$row = mysqli_fetch_assoc($result);
	
	echo "<span style=\"font-family: American Typewriter;\"> <b>Duration: </b>" . $row['duration'] . " ms</span><br>";
	echo "<span style=\"font-family: American Typewriter;\"> <b>Temperature: </b>" . $row['temperature'] . " &#176;C</span><br>";
	echo "<span style=\"font-family: American Typewriter;\"> <b>Distance: </b>" . $row['distance'] . " cm</span><br>";
	echo "<span style=\"font-family: American Typewriter;\"> <b>Volume: </b>" . $row['volume'] . " mL</span><br>";
	echo "<span style=\"font-family: American Typewriter;\"> <b>Date and Time: </b>" . $row['datetime'] . "</span><br>";
}
?>