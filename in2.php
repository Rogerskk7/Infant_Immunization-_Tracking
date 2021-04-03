<?php
require 'connection.php';
session_start();
$username = $_SESSION['staff'];
if (!isset($_SESSION['staff'])) {
  # code...
  header("location:staff.html");
}
?>
<!DOCTYPE html>
<html> 
  <head>   
      <title>Car Rent System</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link href="css/bootstrap.min.css" rel="stylesheet"> 
      <noscript>
      	Javascript is turned off
      </noscript>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->       
       <script src="https://code.jquery.com/jquery.js"></script>       
       <!-- Include all compiled plugins (below), or include individual files as needed -->       
      <script src="js/bootstrap.min.js"></script>
       </head>  
     <body>   
<a href="staffhome.php" style="font-size: 30px; background-color:purple; color: white;">HOME</a><br>
     
         <div class="container">
        <div class="row" >
    <?php
    require 'connection.php';
    $car = $_POST['number'];
    $phone = $_POST['phone'];
    $result5 = mysqli_query($con, "UPDATE cars SET availability='available' WHERE number='$car'");
       if ($result5) {
      # code...
         $result6 = mysqli_query($con, "UPDATE book SET state='returned' WHERE plate='$car' AND phone='$phone' AND state !='canceled'");
         if ($result6) {
           # code...
           echo '<h3 style="background-color: green;color: white;">Car checked in.</h3>';
           header("refresh:1;url=staffhome.php");
         }

     
    } 
      
   
    ?>
     </div>
    </div>
        
        
</body> 
</html>