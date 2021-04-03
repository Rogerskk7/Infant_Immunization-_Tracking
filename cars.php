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
     <body>   
<a href="customerhome.php" style="font-size: 30px; background-color:purple; color: white;">HOME</a><br>
     
         <div class="container">
        <div class="row" >
    <?php
    require 'connection.php';
    $result5 = mysqli_query($con, "SELECT * FROM cars");
    if (mysqli_num_rows($result5)==0) {
      # code...
      echo '<h3 style="background-color: green;color: white;">There are no cars currently.</h3>';
    } 
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
                Availability: '.$row["availability"].'<br>
                Cost per Day: '.$price.'<br></b>
                <center> <a href="book.php?name='.$row['name'].'&id='.$row['number'].'"><button>Reserve</button></a></center>
            </div>';
    }     
   
    ?>
     </div>
    </div>
        
        
</body> 
</html>