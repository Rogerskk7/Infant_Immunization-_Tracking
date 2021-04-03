<?php
require 'connection.php';
session_start();
$phone = $_SESSION['customer'];
if (!isset($_SESSION['customer'])) {
  # code...
  header("location:customer.html");
}

$result5 = mysqli_query($con, "SELECT name FROM customer WHERE phone='$phone'");
while ($row = $result5->fetch_assoc()) {
    $name= $row['name'];
}


$plate = $_SESSION['plate'];
$car = $_SESSION['car'];
$id =$_POST['id'];
$pickup =$_POST['pickup'];

$sql ="INSERT INTO book(plate,car,name,phone,id,pickup,state) VALUES('$plate','$car','$name','$phone','$id','$pickup','booked')";
$query = mysqli_query($con,$sql);

if ($query) {
	# code...
	echo "<script>alert('You have reserved this car successfully');</script>";
	$update = "UPDATE cars SET availability='reserved' WHERE number='$plate'";
	$query2 = mysqli_query($con,$update);
	if ($query2) {
		# code...
		echo "OK";
	}
	unset($_SESSION['plate']);
	unset($_SESSION['car']);
	header("refresh:0;url=customerhome.php");
}
else{
	echo "<script>alert('Failed');</script>";
	unset($_SESSION['plate']);
	unset($_SESSION['car']);
	header("refresh:0;url=customerhome.php");
}
?>