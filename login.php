<!-- 
    Connection in Service (ConnServ): A Service Finder app made for Various accesible service within Taguig City
    Programming Languages: HTML5, PHP, Bootstrap, CSS3, JS, MySql
    Developers:
        Cabigting, Bryan - Project Manager/Front-end Developer 
        Parole, Karl - Full-stack Developer
 -->


<?php
include './hostCon.php';

if(isset($_POST['login'])){

    if(!empty($_POST['login_email']) || !empty($_POST['login_password'])){

        $emailId = mysqli_real_escape_string($connect, $_POST['login_email']);
        $password = mysqli_real_escape_string($connect, $_POST['login_password']);

        $query = mysqli_query($connect,"SELECT * FROM user_tb WHERE user_email = '$emailId' AND userPwd = '$password' AND acc_status = 'active'");

        $rows = mysqli_fetch_array($query);

        if(mysqli_num_rows($query)>0){
            if(!isset($_SESSION)) { 
            session_start(); 
            }
            $_SESSION['email'] = $rows['user_email'];
            $_SESSION['password'] = $rows['userPwd'];
            $_SESSION['username'] = $rows['user_identity'];
            header("Location: ./homepage.php");
        }
        else{
            $username = mysqli_real_escape_string($connect, $_POST['login_email']);
            $password = mysqli_real_escape_string($connect, $_POST['login_password']);

            $query = mysqli_query($connect,"SELECT * FROM admin_tb WHERE admin_username = '$username' AND admin_password = '$password'");

            $rows = mysqli_fetch_array($query);

            if(mysqli_num_rows($query)>0){
                if(!isset($_SESSION)) { 
                    session_start(); 
                }
                $_SESSION['admin'] = $rows['admin_username'];
                $_SESSION['password'] = $rows['admin_password'];
                $_SESSION['userrole'] = $rows['admin_role'];
                header("Location: ./admin_dashboard/index.php");
            }
            else{
                
        
                header("Location: ./login.php?invalid=invalidemail");
                exit();
            }
    
        }
    }
    else{
        
        header("Location: ./login.php?noinput");
        exit();
    }
  
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/img/tab_icon.png">

    
    <link rel="stylesheet" href="./css/login.css">
    <title>Login | Connserv PH</title>
</head>
  <body>
    <div class="page-body">
      <?php include './navbar.php';?>
      <div class="body-container">
          <div class="image-container">
              <img src="./assets/img/icons/connserv_heading.png" alt="ConnServ Heading Image" class="img-responsive">
          </div>
          <div class="login-container">
              <div class="login-form">
                  <div class="inner-container">
                      <h4>Login</h4>
                      <div class="form-login">
                          <form action="./login.php" method="POST">
                                <input class="email_txt" type="text" name="login_email" placeholder="Email" required>
                                <input class="pass-txt" type="password" name="login_password" placeholder="Password">
                                <div class="buttons-accounts">
                                    <button class="login" name="login" type="submit">Login</button>
                                </div>
                          </form>
                                <a href="./signup.php"><button class="signup">Create Account</button></a>
                          <div style="display:flex">
                              <p>Forgot Password?</p><a href="login.html"><p> Click here!</p></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </body>
</html>