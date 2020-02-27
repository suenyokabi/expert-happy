<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>view bookings</title>
    <link rel="stylesheet" href="rooms.css">
</head>
<body>
    <div class="cont">
    <?php  
        $connect = new mysqli('localhost','root','','sunrise') or die(mysqli_error($connect));
        $result = $connect->query("SELECT * FROM STUDENT");
    ?>
        <table>
            <tr>
                <th>first name</th>
                <th>last name</th>
                <th>std_regno</th>
                <th>room_number</th>
                <th>year_of_study</th>
                <th>date</th>
                <th>gender</th>
            </tr>
            <?php
                while($row = $result->fetch_assoc()):?>
            <tr>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['lastname'];?></td>
                <td><?php echo $row['std_regno'];?></td>
                <td><?php echo $row['room_number'];?></td>
                <td><?php echo $row['year_of_study'];?></td>
                <td><?php echo $row['date'];?></td>
                <td><?php echo $row['gender'];?></td>

            </tr>
            <?php endwhile ?>
        </table>
    </div>
    
        </form>
    </div>
</body>
</html>
