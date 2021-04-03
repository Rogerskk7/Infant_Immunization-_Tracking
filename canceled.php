<?php 
session_start();
$phone = $_SESSION['customer'];
require 'connection.php';
$id= $_GET['id'];
 

	    
		$ins = "UPDATE cars SET availability='available' WHERE number='$id'";
		if(mysqli_query($con,$ins)) // && mysqli_query($con,$insert))
		{
			$free ="UPDATE book SET state='canceled' WHERE plate='$id' AND phone='$phone'";
			if(mysqli_query($con,$free)){
		echo '<script>alert("Car removed from reserved")</script>';
	}
     	header("refresh:0;url=customerhome.php");
	}
?>