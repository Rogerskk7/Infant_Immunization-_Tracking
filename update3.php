<?php 
session_start();
require 'connection.php';
$number= $_GET['id'];
$_SESSION['number'] =$number;

$car= $_GET['car'];
$_SESSION['car'] =$car;
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password],input[type=number]  {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: purple;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
  width: 400px;
  margin: auto;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<center>
  <h2>Car Update</h2>
  <h3 style="background-color: green;color: white;">NB: YOU ARE UPDATING CAR PRICE</h3>
</center>


<form action="finalup.php" method="post">

  <div class="container">
     <?php  
 echo "Car you are updating price\t<b>".$car."</b><br>";
 echo "Number Plate\t<b>".$number."</b><br>";
    ?>
<br><br>
    <label for="uname"><b>Price in Ksh.</b></label>
    <input type="number" placeholder="Enter the new Price" name="price" required>

        
    <button type="submit">Proceed With Update</button>
     <center><a href="staffhome.php">Home</a></center>
  </div>

   
</form>

</body>
</html>
