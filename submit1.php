<?php
session_start();
$username=$_POST['email'];
$username=filter_login_input($username);
$password=$_POST['pass'];
$password=filter_login_input($password);
$db=mysqli_connect("localhost","root","","eshoppe");
$qry="SELECT * FROM buyer WHERE email='$username'and password='$password'";
$result=mysqli_query($db,$qry);
$row=mysqli_num_rows($result);
if($row>0)
{
		echo "<p>You are successfully logged in.</p>";
		echo "<p>Now you can access the admin page.</p>";
		echo "<form method=\"post\" action=\"index.html\">";
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
