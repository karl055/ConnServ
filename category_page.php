<?php

if(isset($_POST['searchBtn'])){
    $service = $_POST['service_name'];
    header("Location: ./search.php?$service");
}
if(!isset($_SESSION['username'])){
    session_start();

}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="./assets/img/tab_icon.png">

        <!-- Google Font Link -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

        <!-- Online Bootstrap Link -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="./css/category_page.css">
        <link rel="stylesheet" href="./css/new_nav.css">
        
        <title>ConnServ</title>
    </head>
    <body>
        <nav>
            <form action="./navbar.php" method="post" style="width: 100%;">
                <div class="container-fluid col-12">
                    <div class="logo">
                        <a href="./homepage.php" class="col-1"><img class="logo-img" src="./assets/img/ConnServ_Logo.png" alt="connserv-logo"></a>
                    </div>
                    <div class="search-div col-8">
                        <input class="servicetxt" type="text" name="service_name" placeholder="Search Service Name">

                        <input class="locationtxt" type="text" placeholder="Location" value="Taguig City" readonly>
                        <button type="submit" class="searchbtn" name="searchBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </button>
                    </div>
                    <?php
                    
                    if(isset($_SESSION['username'])){
                        echo '<ul class="nav-links col-2">';
                            echo '<il class="link">';
                                echo "<a href='./user_profile.php' style='color: white;' class='col-6'>Account </a>";
                                echo "<a href='./includes/signout.inc.php' style='color: white; border: none; background-color: transparent;' class='col-6' name='logout'>Logout</a>";
                            echo '</li>';
                        echo '</ul>';
                    }
                    else{
                        echo '<ul class="nav-links col-1">';
                            echo '<il class="link">';
                                echo "<a href='./login.php' style='color: white;' class='col-12'>Account</a>";
                            echo '</li>';
                        echo '</ul>';
                    }
                    
                    ?>
                </div>
            </form>
        </nav>

        <!-- BODY OF THE WEBSITE -->
        
            <!-- Category Cards -->

            <div class="category">
                <!---Category Label -->
                <div class="category-header">
                    <div class="category-title">
                        <h1>Category</h1>
                    </div>
                </div>
    
                <!---AVAILABLE CATEGORY -->
                
                <div class="wrapper">
                  <div class="cols">
                      <a href="./search.php?category=Education">
                        <div class="col" ontouchstart="this.classList.toggle('hover');">
                          <div class="container">
                            <div class="front" style="background-image: url(./assets/img/categories/another/Academic.jpg)">
                              <div class="inner">
                                <p>Education</p>
                              </div>
                            </div>
                            <div class="back">
                              <div class="inner">
                                <p>Explore the various Education service offered within Taguig in ConnServ</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                      <a href="./search.php?category=Art And Culture">
                        <div class="col" ontouchstart="this.classList.toggle('hover');">
                          <div class="container">
                            <div class="front" style="background-image: url(./assets/img/categories/another/Arts.jpg)">
                              <div class="inner">
                                <p>Art and Culture</p>
                              </div>
                            </div>
                            <div class="back">
                              <div class="inner">
                                <p>In ConnServ, you may learn about the numerous arts services available in Taguig</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                      <a href="./search.php?category=Automotive">
                        <div class="col" ontouchstart="this.classList.toggle('hover');">
                          <div class="container">
                            <div class="front" style="background-image: url(./assets/img/categories/another/Automotive.jpg)">
                              <div class="inner">
                                <p>Automotive</p>
                              </div>
                            </div>
                            <div class="back">
                              <div class="inner">
                                <p>ConnServ offers a variety of automotive services in Taguig</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                      <a href="./search.php?category=Professional Service">
                        <div class="col" ontouchstart="this.classList.toggle('hover');">
                          <div class="container">
                            <div class="front" style="background-image: url(./assets/img/categories/another/Business.jpg)">
                              <div class="inner">
                                <p>Professional Services</p>
                              </div>
                            </div>
                            <div class="back">
                              <div class="inner">
                                <p>ConnServ provides a wide range of business services in Taguig</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                      <a href="./search.php?category=Food And Beverages">

                        <div class="col" ontouchstart="this.classList.toggle('hover');">
                          <div class="container">
                            <div class="front" style="background-image: url(./assets/img/categories/another/Catering1.jpg)">
                              <div class="inner">
                                <p>Food and Beverages</p>
                              </div>
                            </div>
                            <div class="back">
                              <div class="inner">
                                <p>In ConnServ, you may learn about the numerous catering services available in Taguig</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                      <a href="./search.php?category=Beauty And Wellness">
                        <div class="col" ontouchstart="this.classList.toggle('hover');">
                          <div class="container">
                            <div class="front" style="background-image: url(./assets/img/categories/another/Clothing1.jpg)">
                              <div class="inner">
                                <p>Beauty and Wellness</p>
                              </div>
                            </div>
                            <div class="back">
                              <div class="inner">
                                <p>ConnServ can help you learn about the many Clothing services accessible in Taguig</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                      <a href="./search.php?category=Construction">
                        <div class="col" ontouchstart="this.classList.toggle('hover');">
                          <div class="container">
                            <div class="front" style="background-image: url(./assets/img/categories/another/Construction.jpg)">
                              <div class="inner">
                                <p>Construction</p>
                              </div>
                            </div>
                            <div class="back">
                              <div class="inner">
                                <p>ConnServ can show you about the various Construction services offered in Taguig</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                      <a href="./search.php?category=Electronics">
                        <div class="col" ontouchstart="this.classList.toggle('hover');">
                          <div class="container">
                            <div class="front" style="background-image: url(./assets/img/categories/another/Electronics.jpg)">
                              <div class="inner">
                                <p>Electronics</p>
                              </div>
                            </div>
                            <div class="back">
                              <div class="inner">
                                <p>You may learn about the various Computer services offered in Taguig by visiting ConnServ</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                      <a href="./search.php?category=Medical Care">
                        <div class="col" ontouchstart="this.classList.toggle('hover');">
                          <div class="container">
                            <div class="front" style="background-image: url(./assets/img/categories/another/Medical_Care.jpg)">
                              <div class="inner">
                                <p>Medical Care</p>
                              </div>
                            </div>
                            <div class="back">
                              <div class="inner">
                                <p>You may discover about the various Electrical services available in Taguig by browsing ConnServ</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                      <a href="./search.php?category=Events">
                        <div class="col" ontouchstart="this.classList.toggle('hover');">
                          <div class="container">
                            <div class="front" style="background-image: url(./assets/img/categories/another/Events.jpg)">
                              <div class="inner">
                                <p>Events</p>
                              </div>
                            </div>
                            <div class="back">
                              <div class="inner">
                                <p>You may discover about the various Electrical services available in Taguig by browsing ConnServ</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                      <a href="./search.php?category=Shopping And Retail">
                        <div class="col" ontouchstart="this.classList.toggle('hover');">
                          <div class="container">
                            <div class="front" style="background-image: url(./assets/img/categories/another/Retail.jpg)">
                              <div class="inner">
                                <p>Shopping & Retail</p>
                              </div>
                            </div>
                            <div class="back">
                              <div class="inner">
                                <p>You may discover about the various Shopping & Retail services available in Taguig by browsing ConnServ</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                 </div>
            </div>
        </div>
        
        <!-- FOOTER 
        ! URGENT DEVELOP!!! Create FOOTER
        -->

        <footer class="footer-div" style="margin-top: 20rem;">
          
          <div class="container-fluid row connserv-container">
            <div class="col-4">
              <img class="connserv-logo" src="./assets/img/ConnServ_Logo.png" alt="Connserv Image">
            </div>
            <div class="col-8 footer-links">
                <div class="row">
                    <div class="col-4">
                        <p>COMPANY</p>
                        <ul>
                            <li><a href="./new">News</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">The Team</a></li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <p>LEARN MORE</p>
                        <ul>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Referral Program</a></li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <p>CONNECT WITH US</p>
                        <ul>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Google+</a></li>
                            <li><a href="#">Instagram</a></li>
                        </ul>
                    </div>
                </div>
            </div>
          </div>
          <div class="footer-copyright">
              <hr>
              <div>
                <p>Copyright @ 2019 All Rights Reserved. Connserv Philippines Corporation</p>
              </div>
          </div>
        </footer>
        <!--
            SCRIPT LINK FOR BOOTSTRAP AND DESIGNING
        -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17-beta.0/vue.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js'></script>
        
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
    </body>
</html>
