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
                          <form action="#">
                                <input type="text" name="email" placeholder="Email">
                                <input class="pass-txt" type="password" name="password" placeholder="Password">
                                <div class="buttons-accounts">
                                    <button class="login">Login</button>
                                    <a href="#"><button class="signup">Create Account</button></a>
                                </div>
                          </form>
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