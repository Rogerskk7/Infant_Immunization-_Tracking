<?php
require 'connection.php';
session_start();
$username = $_SESSION['customer'];
if (!isset($_SESSION['customer'])) {
  # code...
  header("location:customer.html");
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
     <body style="background-image: url('./images/two.jpg');">   
<a href="customerhome.php" style="font-size: 30px; background-color:purple; color: white;">HOME</a><br>
     
         <div class="container">
        <div class="row" >
    <?php
    require 'connection.php';
    $result6 = mysqli_query($con, "SELECT plate,phone FROM book WHERE phone='$username' AND state !='canceled'");
       if (mysqli_num_rows($result6)==0) {
     # code...
      echo "<h2 style='background-color:green;color:white;'>This is Empty,you have not reserved any car</h2>";
      die();  
   }

while ($row = $result6->fetch_assoc()) {
    $plate = $row['plate'];



    $result5 = mysqli_query($con, "SELECT * FROM cars WHERE number='$plate' AND availability='reserved'");
  
    while ($row = $result5->fetch_assoc()) {
             $price = $row["price"];
             if ($price==0) {
               # code...
              $price ='Unavailable';
             }
    echo ' <div class="col-md-3 col-xs-5" style="border-radius:10px; background-color:pink; margin-right:10px;">
                <img src="images/'.$row["image"].'" class="img-responsive img-thumbnail">
                <b>Number: '.$row["number"].'<br>
                Name: '.$row["name"].'<br>
                Seats: '.$row["seats"].'<br>
                Cost per Day: '.$price.'<br></b>
            </div>';
    }  

  
   }
  
   
    ?>
     </div>
    </div>
        
        
</body> 
</html>