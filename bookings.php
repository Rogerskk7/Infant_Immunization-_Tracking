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
       <table class="table table-striped table-hover">
         <thead style="background-color: purple;color: white;"> 
          <tr>
            <th>Book No</th>
            <th>Plate</th>
             <th>Car Name</th>
             <th>Name</th>
             <th>Phone</th>
             <th>ID</th>
             <th>Pickup</th>
          </tr>
        </thead>
       <?php
       require 'connection.php';
       $result5 = mysqli_query($con, "SELECT * FROM book WHERE state='booked'");
         if (mysqli_num_rows($result5)==0) {
     # code...
      echo "<h2 style='background-color:magenta;color:white;'>This list is empty because there are no bookings currently</h2>";
      die();
   }
       while ($row = $result5->fetch_assoc()) {
       $no= $row['no'];
       $plate= $row['plate'];
       $car= $row['car'];
       $name= $row['name'];
       $phone = $row['phone'];
       $id= $row['id'];
       $pickup= $row['pickup'];

       echo '
       
          <tr class="bg-red">
            <td>'.$no.'</td>
            <td>'.$plate.'</td>
            <td>'.$car.'</td>
            <td>'.$name.'</td>
            <td>'.$phone.'</td>
            <td>'.$id.'</td>
            <td>'.$pickup.'</td>
          </tr>
           
           
       


       ';
     
}
?>

    </table> 

       
        
        
</body> 
</html>