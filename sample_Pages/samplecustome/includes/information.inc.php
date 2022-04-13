<?php

if(isset($_POST['submit'])){

    require_once '../../../hostCon.php';
    
    $username = $_POST['usernametxt'];

    $sql = "INSERT INTO sample_tb (username) VALUES ('$username')";

    if($result = mysqli_query($connect, $sql)){
        
        $secondsql = "SELECT * FROM sample_tb WHERE username = '$username'";
        $secondresult = mysqli_query($connect, $secondsql);
        $row = mysqli_fetch_assoc($secondresult);


        $char = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $char = str_shuffle($char);
        for($i = 0, $rand = '', $l = strlen($char) - 1; $i < 3; $i ++) {
            $rand .= $char{mt_rand(0, $l)};
        }

        $shufNum = rand(1111, 9999);

        $first = "CON";
        $second = $row['id'];
        $third = "VI";
        $date = date('ymd');
        $time = time();
        
        $total = $first."-".$date.$shufNum."-".$third."-".$time."-".$rand;
        $customSql = "INSERT INTO secondsample SET customId = '$total', userId = (SELECT id FROM sample_tb WHERE id = '$second')";
        if($customResult = mysqli_query($connect, $customSql)){
            echo "Custome Added";
        }
        else{
            echo mysqli_error($connect);
        }
    }
    else{
        echo mysqli_error($connect);
    }
}