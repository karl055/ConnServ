<?php

session_start();

include '../hostCon.php';

if(isset($_POST['addAdmin'])){

    $fname = mysqli_real_escape_string($connect, $_POST['fname']);
    $lname = mysqli_real_escape_string($connect, $_POST['lname']);
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    $role = mysqli_real_escape_string($connect, $_POST['role']);

    $addSql = "INSERT INTO admin_tb (admin_firstname, admin_lastname, admin_username, admin_password, admin_role) VALUES ('$fname', '$lname', '$username', '$password', '$role')";
    if($addResult = mysqli_query($connect, $addSql)){
        header('Location: ../admin_create.php');
    }else{
        echo mysqli_error($connect);
    }
    
}