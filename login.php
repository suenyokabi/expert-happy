<?php
$server="localhost";
$user="root";
$password="";
$database="sunrise";
$conn=mysqli_connect($server,$user,$password,$database);
$username=$_['username'];
$password=$_['password'];
mysqli_select_db($conn,"sunrise");
$result="select * from housekeeper where username='$username' and password='$password'";
$login=mysqli_query($conn,$result) or die($conn->error);
$row=mysqli_fetch_array($login);

if($row['username']==$username&& $row['password']==$password)
{
   

   header("location:housekeeper.html");
}
else{
echo "incorrect details";
}






?>
