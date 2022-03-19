<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="./assets/img/tab_icon.png">

        <?php include './includes/bootstrap_con.php';?>

        <link rel="stylesheet" href="./css/signup.css">
        <title>Sign Up | Connserv PH</title>
    </head>
    <body>
        <div class="page-body">
        <?php include "./navbar.php";?>
            <div class="body-container">
                <div class="image-container">
                    <img src="assets/img/icons/connserv_heading.png" alt="ConnServ Heading Image" class="img-responsive">
                </div>
                <div class="login-container">
                    <div class="login-form">
                        <div class="inner-container">
                            <h4>Register</h4>
                            <div class="form-login">
                                <form action="./includes/signup.inc.php" method="post">
                                    <input type="text" name="fname" placeholder="First Name">
                                    <input type="text" name="lname" placeholder="Last Name">
                                    <input type="text" name="email" placeholder="Email">
                                    <input class="pass-txt" type="password" name="password" placeholder="Password">
                                    <input class="pass-txt" type="password" name="conf_password" placeholder="Re-enter Password">
                                    <div class="buttons-accounts">
                                        <button class="signup">Register</button>
                                    </div>
                                </form>
                                <div class="buttons-accounts">
                                    <a href="facebook.com"><button class="login">Login with Facebook</button></a>
                                </div>
                                <div style="display:flex">
                                    <p>Already registered?</p><a href="./login.php"><p> Click here!</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> 