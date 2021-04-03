<?php 
require 'connection.php';
$username= $_POST['username'];
$sql="SELECT * FROM staff WHERE username='$username'";
$query = mysqli_query($con,$sql);
if(!mysqli_num_rows($query)==1)
{
	echo '<script>alert("username given is wrong")</script>';
	    header("refresh:0;url=managerhome.php");
}
else
{
	    
		$ins = "DELETE  FROM staff WHERE username='$username'";
		if(mysqli_query($con,$ins)) // && mysqli_query($con,$insert))
		{
		echo '<script>alert("Details deleted")</script>';
     	header("refresh:0;url=managerhome.php");
	}
	 
}
?>