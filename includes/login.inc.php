<?php
    session_start();
    include '../hostCon.php';

    if(isset($_POST['login'])){
      $emailId = $_POST['login_email'];
      $password = $_POST['login_password'];
  
      $query = mysqli_query($connect,"SELECT * FROM user_tb WHERE user_email = '$emailId' AND user_pass = '$password'");
  
      $rows = mysqli_fetch_array($query);

      if(mysqli_num_rows($query)>0){
        $_SESSION['email'] = $rows['user_email'];
        $_SESSION['useridentity'] = $rows['user_identity'];
        $_SESSION['password'] = $rows['user_pass'];
        $_SESSION['name'] = $rows['user_firstname'];
        header('Location: ../user_profile.php?email='.$_SESSION['email'].'');
      }else{
        echo "<script type='text/javascript'>";
        echo "alert('Invalid Email or Password');";
        echo "window.location.href='login.php'";
        echo "</script>";
      }
    }
?>