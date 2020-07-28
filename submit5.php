<?php 
 
$host="localhost";
$user="root";
$password="";
$db="demo";
 
mysqli_connect($host,$user,$password);
mysqli_select_db($db);
 
if(isset($_POST['email'])){
    
    $uname=$_POST['email'];
    $password=$_POST['pass'];
    
    $sql="select * from buyer where user='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=mysqli_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>