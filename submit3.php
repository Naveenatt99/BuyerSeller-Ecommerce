<?php
session_start();
$username=$_POST['email'];
$username=filter_login_input($username);
$password=$_POST['pass'];
$password=filter_login_input($password);
$db=mysqli_connect("localhost","root","","amaclone");
$qry="SELECT * FROM sellerlog WHERE email='$username'and password='$password'";
$result=mysqli_query($db,$qry);
$row=mysqli_num_rows($result);
$id="select sid from sellerlog where email='$username'and password='$password'";
$result1=mysqli_query($db,$id);
if(mysqli_num_rows($result1)>0)
{
while($row1=mysqli_fetch_assoc($result1))
{
$row2=$row1["sid"];
echo "PLEASE NOTE YOUR SELLER ID :".$row2;
}}

if($row>0)
{
		echo "<p>You are successfully logged in.</p>";
		echo "<p>Now you can access the admin page.</p>";
		echo "<form method=\"post\" action=\"colorlib-regform-5\index1.html.html\">";
		echo "<input type=\"submit\" name=\"GO INTO THE WEBSITE\" value=\"GO TO THE WEBSITE\">";
		echo "</form>";
		
}
else 
		{
$loginCheck = "No";
echo "YOU HAVE ENTERED SOMETHING WRONG";

			
		}
	
	function filter_login_input($loginData)
	{
		$loginData = trim($loginData);
		$loginData = stripslashes($loginData);
		$loginData = htmlspecialchars($loginData);
		return $loginData;
	}


?>
