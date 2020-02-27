<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>check spaces</title>
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

            </tr>
            <?php endwhile ?>
        </table>
    </div>
    
        </form>
    </div>
</body>
</html>
