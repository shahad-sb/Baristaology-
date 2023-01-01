<?php 
require('db_connnection.php');
$id =$_REQUEST['id'];
$sql = "DELETE FROM itdepartment_course WHERE id = '$id'" ;

if(!mysqli_query($con,$sql))
		echo "Proplem in deleting data !";
	else
		echo "Deleted successfully !"; 	

header("Location: courses.php");
?>