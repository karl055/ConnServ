<?php
    include '../hostCon.php';

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conf_password = $_POST['conf_password'];

    if($conf_password == $password){

        $sql = "INSERT INTO user_tb (user_firstname, user_lastname, user_email, user_pass) VALUES ('$fname', '$lname', '$email', '$password')";
        mysqli_query($connect, $sql);
    
        header("Location: ../login.php?signup=success");
    }
    else{
        echo '<script> alert("Password not met");</script>';
        header("Location: ../signup.php?signup=failed");
    }
?>