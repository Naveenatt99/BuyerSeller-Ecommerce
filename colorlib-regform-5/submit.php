<?php
$sid=$_POST['sid'];

$product_brand=$_POST['product_brand'];
$product_cat=$_POST['product_cat'];
$product_title=$_POST['product_title'];
$product_price=$_POST['product_price'];
$product_des=$_POST['product_des'];
$product_keywords=$_POST['product_keywords'];


$username= "root";
$password= "";
$servername ="localhost";
$dbname= "amaclone";
$conn= new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
	{die("connection failed: .$conn->connect_error");}
echo "connected successfully";
$sql=" INSERT INTO `seller` (`sid`,`product_brand`,`product_cat`,`product_title`,`product_price`,`product_des`,`product_keywords`) VALUES ('$sid','$product_brand','$product_cat','$product_title','$product_price','$product_des','$product_keywords')"; 
if($conn->query($sql)== TRUE)
	
{	echo "new record are created";
	echo "<form method=\"post\" action=\"index1.html.html\">";
		echo "<input type=\"submit\" name=\"GO INTO THE WEBSITE\" value=\"GO TO THE WEBSITE\">";
		echo "</form>";}
else
	echo "creation error : ".$sql."<br>" . $conn->error;
$conn->close();
?>	



