<?php
	//create connection
	$con = mysqli_connect("localhost","root","","it_department");
	if(!$con)
		echo "Not Connected To Database Server!";
?>