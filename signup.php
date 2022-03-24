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
                                <form class="needs-validation" action="./includes/signup.inc.php" method="post" novalidate>
                                    <div>
                                        <input type="text" class="form-control" id="validationCustom05" name="fname" placeholder="First Name" required>
                                        <div class="invalid-feedback">
                                            <?php if(empty($_POST['fname'])){ echo"Please Provide a valid Input";}?>
                                        </div>
                                    </div>
                                    <div>
                                        <input type="text" class="form-control" id="validationCustom05" name="lname" placeholder="Last Name" required>
                                        <div class="invalid-feedback">
                                            <?php if(empty($_POST['lname'])){ echo"Please Provide a valid Input";}?>
                                        </div>
                                    </div>
                                    <div>
                                        <input type="email" class="form-control" id="validationCustom05" name="email" placeholder="Email" required>
                                        <div class="invalid-feedback">
                                            <?php if(empty($_POST['email'])){ echo"Please Provide a valid Input";}?>
                                            
                                        </div>
                                    </div>
                                    <div>
                                        <input class="pass-txt form-control" id="validationCustom05" type="password" name="password" placeholder="Password" required>
                                        
                                        <div class="invalid-feedback">
                                            <?php if(empty($_POST['password'])){ echo "Please Provide a valid Input";}?>
                                        </div>
                                    </div>
                                    <div>
                                        <input class="pass-txt form-control" id="validationCustom05" type="password" name="conf_password" placeholder="Re-enter Password" required>
                                        <div class="invalid-feedback">
                                            <?php if(empty($_POST['conf_password'])){ echo"Please Provide a valid Input";}?>
                                        </div>
                                    </div>
                                    
                                    <div class="buttons-accounts">
                                        <button class="signup" class="form-control" id="validationCustom05" type="submit">Register</button>
                                        
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
        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
                'use strict';
                window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                    }, false);
                });
                }, false);
            })();
      </script>
    </body>
</html> 