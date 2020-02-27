
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>rooms</title>
    <link rel="stylesheet" href="rooms.css">
</head>
<body>
    <div class="cont">
    <?php  
        $connect = new mysqli('localhost','root','','sunrise') or die(mysqli_error($connect));
        $result = $connect->query("SELECT * FROM ROOMS");
    ?>
        <table>
            <tr>
                <th>block</th>
                <th>number</th>
                <th>Capacity</th>
                
                <th>price</th>
                <th>Status</th>
            </tr>
            <?php
                while($row = $result->fetch_assoc()):?>
            <tr>
                <td><?php echo $row['block'];?></td>
                <td><?php echo $row['number'];?></td>
                <td><?php echo $row['capacity'];?></td>
                <td><?php echo $row['price'];?></td>
                <td><?php echo $row['status'];?></td>
                <td> <a href="rooms.php?edit=<?php echo $row['id'];?>">Edit</a></td>
            </tr>
            <?php endwhile ?>
        </table>
    </div>
    <div class="form">
    <?php require_once 'process.php'; ?>
        <form action="process.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="input-grp">
                <label for="">Block</label>
                <input type="text" name="block" value="<?php echo $block;?>" id="">
            </div>
            <div class="input-grp">
                <label for="">Number</label>
                <input type="text" name="number" value="<?php echo $number;?>" id="">
            </div>
            <div class="input-grp">
                <label for="">Capacity</label>
                <input type="text" name="capacity" value="<?php echo $capacity;?>" id="">
            </div>
            <div class="input-grp">
                <label for="">Price</label>
                <input type="text" name="price" value="<?php echo $price;?>" id="">
            </div>
            <div class="input-grp">
                <label for="">Status</label>
                <input type="text" name="status" value="<?php echo $status;?>" id="">
            </div>
            <input type="submit" value="Update"  name="update">
        </form>
    </div>
</body>
</html>
