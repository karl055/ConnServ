<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <?php include_once '../../includes/bootstrap_con.php'; ?>
        <?php require_once '../../hostCon.php';?>
    </head>
    <body>
        <h1>THIS IS BUSINESS </h1>
        <?php
        
        $sql = "SELECT * FROM business_tb";

        $result = mysqli_query($connect, $sql);

        while($row = mysqli_fetch_assoc($result)){
            
            echo $row['business_id']."<br>";
            $array_line = mysqli_fetch_array($result);
            for($i = 0; $i <= $row; $i++){
                
                echo $row['business_name'];
            }
        }
        ?>
    </body>
</html>