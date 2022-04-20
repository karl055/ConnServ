<?php 

include '../../hostCon.php';

if(isset($_POST['searchbutton'])){
    $search = mysqli_real_escape_string($connect, $_POST['search']);
    $sql = "SELECT * FROM business_tb WHERE business_name LIKE '%$search%'";
    if($result = mysqli_query($connect, $sql)){

        while($row = mysqli_fetch_assoc($result)){
            echo $row['business_name'];
        }

    }
}
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