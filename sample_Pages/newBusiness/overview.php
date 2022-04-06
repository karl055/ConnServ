<?php

include_once '../../hostCon.php';

$sql = "SELECT * FROM `business_tb` WHERE datetime_created = (SELECT MAX(datetime_created) FROM business_tb)";

$result = mysqli_query($connect, $sql);


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
        <form action="./include/dateTime.php" method="post">

        <?php 
        
            if($row = mysqli_fetch_assoc($result)){
                echo "<a href='./viewBusiness.php?'>".$row['business_name']."</a>";
            }
        ?>
            <button type="submit" name="submit">NEWEST CREATED BUSINESS LINK</button>
        </form>
    </body>
</html>