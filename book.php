<?php
$server="localhost";
$user="root";
$password="";
$database="sunrise";
try {
$conn=mysqli_connect($server,$user,$password,$database);
} catch (Exception $e)
{
$e->getMessage();

}

$date = "20".date("y-m-d");
mysqli_select_db($conn,"sunrise");
 $four="INSERT INTO STUDENT(`name`,lastname,std_regno,year_of_study,room_number,`date`,gender)
  VALUES ('$_POST[name]','$_POST[lastname]','$_POST[std_regno]','$_POST[year_of_study]','$_POST[room_number]',
  '$date','$_POST[gender]')";
$five=mysqli_query($conn,$four) OR die($conn->error);
if($five){
  header("location:ipay.php");
  // echo '<script>alert("'.$_POST[year_of_study].'")</script>';
}
else 
{echo " total failure";}




?>