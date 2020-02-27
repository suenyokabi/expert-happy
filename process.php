<?php
    $block = '';
    $number = '';
    $capacity = '';
    $price = '';
    $status= '';
    $connect = new mysqli('localhost','root','','sunrise') or die(mysqli_error($connect));
    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        
        $qry = "SELECT * FROM ROOMS where id = '$id'";
        $result = $connect-> query($qry) or die($connect->error);
        if(count($result)==1){
            $row = $result->fetch_array();
            $block = $row['block'];
            $number = $row['number'];
            $capacity = $row['capacity'];
            $price = $row['price'];
            $status = $row['status'];
        }
    }
    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $block = $_POST['block'];
        $number = $_POST['number'];
        $capacity = $_POST['capacity'];
        $price = $_POST['price'];
        $status = $_POST['status'];
        $qry = "UPDATE `rooms` SET `block`='$block',`number`='$number',`capacity`='$capacity',`price`='$price',`status`='$status' WHERE id = '$id' ";
        $connect-> query($qry) or die($connect->error);
        header('location: rooms.php');  
    }
?>
