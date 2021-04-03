<?php
require 'connection.php';
$phone =$_POST['phone'];
$password =$_POST['password'];

$sql ="SELECT* FROM customer WHERE phone='$phone' AND password='$password'";
$query = mysqli_query($con,$sql);

if (mysqli_num_rows($query)>0) {
	# code...
	session_start();
	$_SESSION['customer'] = $phone;
	header("location:customerhome.php");
}
else{
	echo "<script>alert('Username or password wrong');</script>";
	header("refresh:0;url=customer.html");
}
?>