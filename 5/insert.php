<?php 

	include("./db_connnection.php");
	$courseName= $_POST['cname'];
	$courseId= $_POST['cid'];
	$level= $_POST['level'];
	$sql= "INSERT INTO itdepartment_course(Course_ID,Course_name,Level) VALUES ('$courseId','$courseName','$level')";

	if(!mysqli_query($con,$sql))
		die("Connection failed: " . mysqli_connect_error());
		else
		echo "New course created";
		
	    mysqli_close($con);

	header("Location: courses.php");
?>