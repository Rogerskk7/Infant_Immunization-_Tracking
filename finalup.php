<?php
require 'connection.php';
session_start();
$phone = $_SESSION['staff'];
if (!isset($_SESSION['staff'])) {
  # code...
  header("location:staff.html");
}


$number = $_SESSION['number'];
$car = $_SESSION['car'];
$price =$_POST['price'];
 

$sql ="UPDATE cars SET price='$price' WHERE number='$number'";
$query = mysqli_query($con,$sql);

if ($query) {
	# code...
	echo "<script>alert('You have updated price');</script>";
	$update = "UPDATE cars SET availability='available' WHERE number='$plate'";
	$query2 = mysqli_query($con,$update);
	if ($query2) {
		# code...
		echo "OK";
	}
	unset($_SESSION['number']);
	unset($_SESSION['car']);
	header("refresh:0;url=staffhome.php");
}
else{
	echo "<script>alert('Failed');</script>";
	unset($_SESSION['number']);
	unset($_SESSION['car']);
	header("refresh:0;url=staffhome.php");
}
?>