<?php 

include '../../hostCon.php';
date_default_timezone_set('Asia/Manila');
        echo $dateTimeCreated = date("Y-m-d G:i:s");
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
        <form action="./search.php" method="post">
            <input type="text" name="search" placeholder="search">
            <button type="submit" name="searchbutton">Search</button>
        </form>

        <div>
        </div>
    </body>
</html>