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
        <?php include_once '../../includes/bootstrap_con.php';?>
    </head>
    <body>
        
        <form action="./include/dateTime.php" method="post">

        <?php 
        
            if($row = mysqli_fetch_assoc($result)){

                $initial = 1;
                
                    echo "<div class='card'>";
                    echo "<img src='./assets/img/featured_services/bonheur_apparel/logo.jpg' class='card-img-top'>";
                    echo "<div class='card-body'>";
                    echo "<a href='./viewBusiness.php' class='card-title stretched-link'>'".$row['business_name']."'</a>";
                    echo "<p class='card-text'>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>";
                    echo "</div>";
                    echo "<div class='card-footer'>";
                    echo "<small class='text-muted'>Last updated 3 mins ago</small>";
                    echo "</div>";
                    echo "</div>";
            }
        ?>
                        
            <button type="submit" name="submit">NEWEST CREATED BUSINESS LINK</button>
        </form>
    </body>
</html>