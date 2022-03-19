<?php
    session_start();
    include '../hostCon.php';

    if(isset($_POST['login'])){
      $emailId = $_POST['txtEmail'];
      $password = $_POST['txtPassword'];
  
      $query = mysqli_query($connect,"SELECT * FROM client WHERE c_email = '$emailId' AND c_password = '$password'");
  
      $rows = mysqli_fetch_array($query);

      if(is_array($rows)){
        $_SESSION['email'] = $rows['c_email'];
        $_SESSION['password'] = $rows['c_password'];
        $_SESSION['name'] = $rows['c_name'];
      }else{
        echo "<script type='text/javascript'>";
        echo "alert('Invalid Email or Password');";
        echo "window.location.href='login.php'";
        echo "</script>";
      }
    }/* 
    if($_SESSION['email'] == true){
      header("Location:../user_profile.php");
    } */
?>