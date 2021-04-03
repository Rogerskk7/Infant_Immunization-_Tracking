<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "rentcar");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
    $number =$_POST['number'];
    $name =$_POST['name'];
  	$image = $_FILES['image']['name'];
    $seats=$_POST['seats'];
    $price=$_POST['price'];
  	 
  	 

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO cars (number,name,image,seats,price) VALUES ('$number','$name','$image','$seats','$price')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		echo"<script>alert('Car details uploaded successfully');</script>;";
      header("refresh:0;url=staffhome.php");
  	}else{
  		 
      echo"<script>alert('Failed to upload image');</script>;";
      header("refresh:0;url=staffhome.php");
  	}
  }
   
?>