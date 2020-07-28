<?php
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];
$cname=$_POST['cname'];
$username= "root";
$pass= "";
$servername ="localhost";
$dbname= "amaclone";
$conn= new mysqli($servername,$username,$pass,$dbname);

if($conn->connect_error)
	{die("connection failed: .$conn->connect_error");}
echo "connected successfully";
$sql=" INSERT INTO `sellerlog` (`fname`,`lname`,`email`,`password`,`address`,`cname`) VALUES ('$fname','$lname','$email','$password','$address','$cname')"; 
if($conn->query($sql)== TRUE)
	
	echo "new record are created";
	
else
	echo "creation error : ".$sql."<br>" . $conn->error;
$conn->close();
?>	



