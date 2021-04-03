<?php
require 'connection.php';
session_start();
$username = $_SESSION['manager'];
if (!isset($_SESSION['manager'])) {
  # code...
  header("location:manager.html");
}
 $no ="SELECT* FROM book";
 $qq = mysqli_query($con,$no);
 $number = mysqli_num_rows($qq);

 $no2 ="SELECT* FROM book WHERE state='canceled'";
 $qq2 = mysqli_query($con,$no2);
 $number2 = mysqli_num_rows($qq2);

  $no3 ="SELECT* FROM book WHERE state='booked' OR state=''";
 $qq3 = mysqli_query($con,$no3);
 $number3 = mysqli_num_rows($qq3);

   $no4 ="SELECT* FROM book WHERE state='returned'";
 $qq4 = mysqli_query($con,$no4);
 $number4 = mysqli_num_rows($qq4);

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
<br><br>

         <table class="table table-striped table-hover">
         <thead style="background-color: magenta;color: white;"> 
          <tr>
            <th>Total Reservations</th>
            <th>Canceled Bookings</th>
             <th>Cars on Rent</th>
             <th>Returned Cars</th>
            
          </tr>
        </thead>
       
          <tr class="bg-red">
            <td><?php echo $number; ?></td>
            <td><?php echo $number2; ?></td>
            <td><?php echo $number3; ?></td>
            <td><?php echo $number4; ?></td>
          </tr>
        </table>

<h1><center>RESERVATION TABLE</center></h1>
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
             <th>State</th>
          </tr>
        </thead>
       <?php
      
       $result5 = mysqli_query($con, "SELECT * FROM book");
       while ($row = $result5->fetch_assoc()) {
       $no= $row['no'];
       $plate= $row['plate'];
       $car= $row['car'];
       $name= $row['name'];
       $phone = $row['phone'];
       $id= $row['id'];
       $pickup= $row['pickup'];
       $state= $row['state'];

       echo '
       
          <tr class="bg-red">
            <td>'.$no.'</td>
            <td>'.$plate.'</td>
            <td>'.$car.'</td>
            <td>'.$name.'</td>
            <td>'.$phone.'</td>
            <td>'.$id.'</td>
            <td>'.$pickup.'</td>
            <td>'.$state.'</td>
          </tr>
           
           
       


       ';
     
}
?>

    </table> 

       
        
        
</body> 
</html>