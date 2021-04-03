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


?>
<!DOCTYPE html>
<html>
<head>
	<title>Car Rental System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url('./images/two.jpg');
  background-size: cover;
  background-repeat: no-repeat;
}

.topnav {
  overflow: hidden;
  background-color: purple;
}

.topnav a {
  float: left;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 30px;
  text-transform: uppercase;
}

.topnav a:hover {
  background-color: white;
  color: purple;
}

.topnav a.active {
  background-color: red;
  color: white;
}
</style>
</head>
<body>

<div class="topnav">
 <center>
  <a class="active" href="#home">Home</a>
  <a href="cars.php">View Cars</a>
  <a href="reserve.php">View Reservation</a>
  <a href="cancel.php">Cancel Reservation</a>
  <a href="search.php">Car Search</a>

</center>
</div>
<div style="font-size: 18px;color:white;background-color:purple;width:700px; border-radius:0px; float: right;">Welcome,you are logged in as<?php echo" ". $name;?>(Customer)<a href="logoutc.php" style="color: white;float: right;">Logout</a>
</div>
<div style="padding-left:16px">
  <center><div style="color:white;background-color:purple; width: 700px; font-size: 50px; margin-top: 200px;">
  	<p>CUSTOMER HOME</p>
  </div></center>

</div>

</body>
</html>
