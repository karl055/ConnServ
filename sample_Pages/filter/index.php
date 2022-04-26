<?php
include '../../hostCon.php';
include '../../includes/bootstrap_con.php';

    $ratingSql = "SELECT * FROM business_tb where business_id = 43";
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
        <div class="col-12" style="display: flex;">
            <div class="col-2">
                <form action="./index.php" method="post">
                    <a href="./index.php?date">Date</a>
                    <a href="./index.php?alphabetic">Alphabetical</a>
                    <button type="submit" name="submit">Submit</button>
                </form>
                
            </div>
            <div class="col-10">
                <?php
                
                ?>
            </div>
        </div>
    </body>
</html>