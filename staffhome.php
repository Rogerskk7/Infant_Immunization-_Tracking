<?php
require 'connection.php';
session_start();
$username = $_SESSION['staff'];
if (!isset($_SESSION['staff'])) {
  # code...
  header("location:staff.html");
}

$result5 = mysqli_query($con, "SELECT name FROM staff WHERE username='$username'");
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
  <a href="uploadcar.html">New car</a>
  <a href="update2.php">Update Car</a>
  <a href="viewcar.php">View Cars</a>
  <a href="bookings.php">Bookings</a>
  <a href="search2.php">Car Search</a>
   <a href="in.php">CheckIn</a>

</center>
</div>
<div style="font-size: 18px;color:white;background-color:purple;width:700px; border-radius:0px; float: right;">Welcome,you are logged in as<?php echo" ". $name;?>(Staff)<a href="logouts.php" style="color: white;float: right;">Logout</a>
</div>
<div style="padding-left:16px">
  <center><div style="color:white;background-color:purple; width: 700px; font-size: 50px; margin-top: 200px;">
  	<p>STAFF HOME</p>
  </div></center>

</div>

</body>
</html>
