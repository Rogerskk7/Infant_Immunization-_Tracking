<?php
require 'connection.php';
$name = $_POST['name'];
$phone =$_POST['phone'];
$username =$_POST['username'];
$password =$_POST['password'];

$sql ="INSERT INTO staff(name,phone,username,password) VALUES('$name','$phone','$username','$password')";
$query = mysqli_query($con,$sql);

if ($query) {
	# code...
	echo "<script>alert('Staff Details Have been added');</script>";
	header("refresh:0;url=managerhome.php");
}
else{
	echo "<script>alert('Failed,this username is already used');</script>";
	header("refresh:0;url=addstaff.html");
}
?>