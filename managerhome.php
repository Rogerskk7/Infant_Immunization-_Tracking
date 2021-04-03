<?php
require 'connection.php';
session_start();
$username = $_SESSION['manager'];
if (!isset($_SESSION['manager'])) {
  # code...
  header("location:manager.html");
}

$result5 = mysqli_query($con, "SELECT name FROM manager WHERE username='$username'");
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
  <a href="addstaff.html">Add staff</a>
    <a href="viewstaff.php">View staff</a>
  <a href="removestaff.html">Remove Staff</a>
  <a href="report.php">View Report</a>

</center>
</div>
<div style="font-size: 18px;color:white;background-color:purple;width:700px; border-radius:0px; float: right;">Welcome,you are logged in as<?php echo" ". $name;?>(Manager)<a href="logoutm.php" style="color: white;float: right;">Logout</a>
</div>
<div style="padding-left:16px">
  <center><div style="color:white;background-color:purple; width: 700px; font-size: 50px; margin-top: 200px;">
  	<p>MANAGER HOME</p>
  </div></center>

</div>

</body>
</html>
