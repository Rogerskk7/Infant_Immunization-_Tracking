<?php 
require 'connection.php';
$id= $_GET['id'];

	    
		$ins = "DELETE  FROM cars WHERE number='$id'";
		if(mysqli_query($con,$ins)) // && mysqli_query($con,$insert))
		{
		echo '<script>alert("Car Deleted")</script>';
     	header("refresh:0;url=staffhome.php");
	}
?>