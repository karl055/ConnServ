<?php
    include '../hostCon.php';

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conf_password = $_POST['conf_password'];

    $email_check = mysqli_query($connect, "SELECT * FROM user_tb WHERE user_email = '$email'");
    /* $email_find = mysqli_fetch_array($email_check); */
    if(mysqli_num_rows($email_check)){
        header("Location: ../signup.php?email=invalid");
        echo "Email Already in Use";
        /* echo "<script>";
        echo "document.getElementById('invalid_email').value = 'Email is already in use';";
        echo "</script>"; */
    }else{
        
        if($conf_password == $password){

            $sql = "INSERT INTO user_tb (user_firstname, user_lastname, user_email, user_pass) VALUES ('$fname', '$lname', '$email', '$password')";
            mysqli_query($connect, $sql);
        
            header("Location: ../login.php?signup=success");
        }
        else{
            echo '<script> alert("Password not met");</script>';
            header("Location: ../signup.php?signup=failed");
        }
    }
?>