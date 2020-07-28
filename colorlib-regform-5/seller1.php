<?php
$a=$_POST['productname'];
$b=$_POST['category'];
$c=$_POST['description'];
$d=$_POST['price'];
$username= "root";
$password= "";
$servername ="localhost";
$dbname= "eshoppe";
$conn= new mysqli($servername,$username,$password,$dbname);

$id= "select sid from seller where email='naveen@gmail.com'";
if($conn->connect_error)
	{die("connection failed: .$conn->connect_error");}
echo "connected successfully";
$sql=" INSERT INTO `product` (`pname`,`cat`,`des`,`pri`)  VALUES ('$a','$b','$c','$d')"; 
if($conn->query($sql)== TRUE)
	
	echo "new record are created";
else
	{echo "creation error : ".$sql."<br>" . $conn->error;}
$id1="select userid from current";
$result1=mysqli_query($conn,$id1);
if(mysqli_num_rows($result1)>0)
{
while($row1=mysqli_fetch_assoc($result1))
{
$row2=$row1["userid"];
echo $row2;

$sql1="INSERT INTO product (sid) VALUES ('$row2')";
if(mysqli_multi_query($conn,$sql))
echo " created";
else
echo "not";

}}


$conn->close();
?>	



