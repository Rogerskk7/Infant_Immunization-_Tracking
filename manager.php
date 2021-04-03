<?php
require 'connection.php';
$username =$_POST['username'];
$password =$_POST['password'];

$sql ="SELECT* FROM manager WHERE username='$username' AND password='$password'";
$query = mysqli_query($con,$sql);

if (mysqli_num_rows($query)>0) {
	# code...
	session_start();
	$_SESSION['manager'] = $username;
	header("location:managerhome.php");
}
else{
	echo "<script>alert('Username or password wrong');</script>";
	header("refresh:0;url=manager.html");
}
?>