<?php
    include '../hostCon.php';
    session_start();
    
    if(!isset($_SESSION['username'])){
        header("Location: ./login.php");
        die();
    }else{
        $user_id = $_SESSION['username'];
        $email = $_POST['edit_email'];
        $password = $_POST['edit_password'];
        $firstname = $_POST['edit_firstname'];
        $lastname = $_POST['edit_surname'];
        $phone = $_POST['edit_phonenumber'];
        $gender = $_POST['edit_gender'];
        /* $city = $_POST['city']; */
    
        $sql = "UPDATE user_tb SET 
        user_email = '$email',
        user_pass = '$password',
        user_firstname = '$firstname',
        user_lastname = '$lastname',
        user_contact ='$phone',
        user_sex ='$gender'
        WHERE user_identity = '$user_id'";
        mysqli_query($connect, $sql);
    
        header("Location: ../user_profile.php?edit=success");
    }
    
?>