<?php

	$servername = "localhost";
	$username = "id17286259_root";
	$password = "uB6]wo7P~c*Iy!o!";
	$dbname = "id17286259_inrbank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>