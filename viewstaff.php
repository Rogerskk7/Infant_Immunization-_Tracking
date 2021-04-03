<?php
require 'connection.php';
session_start();
$username = $_SESSION['manager'];
if (!isset($_SESSION['manager'])) {
  # code...
  header("location:manager.html");
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
<a href="managerhome.php" style="font-size: 30px; background-color:purple; color: white;">HOME</a><br>
       <table class="table table-striped table-hover">
         <thead style="background-color: purple;color: white;"> 
          <tr>
            <th>Name</th>
            <th>Phone</th>
             <th>Username</th>
          </tr>
        </thead>
       <?php
       require 'connection.php';
       $result5 = mysqli_query($con, "SELECT * FROM staff");
       while ($row = $result5->fetch_assoc()) {
       $name= $row['name'];
       $phone = $row['phone'];
       $username= $row['username'];

       echo '
       
          <tr class="bg-red">
            <td>'.$name.'</td>
            <td>'.$phone.'</td>
            <td>'.$username.'</td>
          </tr>
           
           
       


       ';
     
}
?>

    </table> 

       
        
        
</body> 
</html>