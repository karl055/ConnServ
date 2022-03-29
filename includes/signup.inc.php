<?php
    include '../hostCon.php';

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conf_password = $_POST['conf_password'];

    $email_check = mysqli_query($connect, "SELECT * FROM user_tb WHERE user_email = '$email'");
    

    if(mysqli_num_rows($email_check)>0){
        header("Location: ../signup.php?email=invalid");
        echo "Email Already in Use";
    }else{
        
        if($conf_password == $password){

                if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            
                    $sql = "INSERT INTO user_tb (user_firstname, user_lastname, user_email, userPwd) VALUES ('$fname', '$lname', '$email', '$password')";
                    mysqli_query($connect, $sql);
                }
                else{
                    header("Location: ../signup.php?email=invalid");
                }
                return $result;
                header("Location: ../login.php");
            }
        
        else{
            echo '<script> alert("Password not met");</script>';
            header("Location: ../signup.php?signup=failed");
        }
    }
?>