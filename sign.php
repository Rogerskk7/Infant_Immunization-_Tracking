<?php
require 'connection.php';
$name = $_POST['name'];
$phone =$_POST['phone'];
$password =$_POST['password'];

$sql ="INSERT INTO customer(name,phone,password) VALUES('$name','$phone','$password')";
$query = mysqli_query($con,$sql);

if ($query) {
	# code...
	echo "<script>alert('Sign up completed');</script>";
	header("refresh:0;url=customer.html");
}
else{
	echo "<script>alert('Failed,this phone is already used');</script>";
	header("refresh:0;url=sign.html");
}
?>