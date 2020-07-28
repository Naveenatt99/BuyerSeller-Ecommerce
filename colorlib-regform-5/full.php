<!DOCTYPE html>
<html>
<head>
<title>TABLE</title>
<style type="text/css">
table{
border-collapse: collapse;
width:100%;
color: =#d96459;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th{
background-color: #d96459;
color: white;}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>FIRST NAME</th>
<th>LAST NAME</th>
<th>ADDRESS</th>
<th>PHONE NO</th>
<th>FEEDBACK</th>
</tr>

<?php
$db=mysqli_connect("localhost","root","","db2");
$id="select * from seller";
$result1=mysqli_query($db,$id);
if(mysqli_num_rows($result1)>0)
{
while($row1=mysqli_fetch_assoc($result1))
{
echo "<tr><td>". $row1['first_name'] ."</td><td>". $row1['last_name'] ."</td><td>". $row1['address'] ."</td><td>". $row1['phone'] ."</td><td>". $row1['feedback']."</td><td>";
}
echo "</table";}
?>