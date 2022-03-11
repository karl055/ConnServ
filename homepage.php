<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="./assets/img/tab_icon.png">

        <?php include './includes/bootstrap_con.php';?>
        
        <link rel="stylesheet" href="./css/homepage.css">
        <title>ConnServ</title>
    </head>
    <body>
        <!-- This is comment-->
        <!-- HEADER CONTAINER FOR HEADER AND NAVBAR Navbar inside of shrinking header-->
        <div class="header_logo" style="background-image: url('./assets/img/header_img.png');">
            <div class="title_div">
                <div class="text_margin">
                    <h2>Find and Hire Near Services</h2>
                    <h5>Merchants and Freelancers marketplaces, find more!</h5>
                </div>
            </div>
        </div>
        

        <?php include './navbar.php';?>
        <!-- BODY OF THE WEBSITE -->
        
        <!-- CATEGORIES -->
        <div class="container-fluid">
            <div class="catergory-container">
                <div class="category-title">
                    <h4>Explore More Categories</h4>
                </div>
                <div class="categories card-deck">
                    <div class="card"  style="width: 10rem;">
                        <img class="card-img-top" src="./assets/img/categories//another/Academic.jpg" alt="Card Image Cap">
                        <div class="card-body">
                            <a href="#" class="card-text stretched-link">Academic</a>
                        </div>
                    </div>
                    <div class="card"  style="width: 10rem;">
                        <img class="card-img-top" src="./assets/img/categories/another/Clothing.jpg" alt="Card Image Cap">
                        <div class="card-body">
                            <a href="#" class="card-text stretched-link">Clothing</a>
                        </div>
                    </div>
                    <div class="card"  style="width: 10rem;">
                        <img class="card-img-top" src="./assets/img/categories/another/Catering.jpg" alt="Card Image Cap">
                        <div class="card-body">
                            <a href="#" class="card-text stretched-link">Catering</a>
                        </div>
                    </div>
                    <div class="card"  style="width: 10rem;">
                        <img class="card-img-top" src="./assets/img/categories/another/Computer.jpg" alt="Card Image Cap">
                        <div class="card-body">
                            <a href="#" class="card-text stretched-link">Computer</a>
                        </div>
                    </div>
                    <div class="card"  style="width: 10rem;">
                        <img class="card-img-top" src="./assets/img/categories/another/construction1.jpg" alt="Card Image Cap">
                        <div class="card-body">
                            <a href="#" class="card-text stretched-link">Construction</a>
                        </div>
                    </div>
                    <div class="card"  style="width: 10rem;">
                        <img class="card-img-top" src="./assets/img/categories/another/Electrical.jpg" alt="Card Image Cap">
                        <div class="card-body">
                            <a href="#" class="card-text stretched-link">Electrical</a>
                        </div>
                    </div>
                    <div class="card"  style="width: 10rem;">
                        <img class="card-img-top" src="./assets/img/categories/another/Business.jpg" alt="Card Image Cap">
                        <div class="card-body">
                            <a href="#" class="card-text stretched-link">Business</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Featured Services Row
            
            ! this is warning -->
            <!-- TODO featured and new services must be developed before february 9 (wednesday) -->

            <div class="featured">
                <!---Featured Title -->
                <div class="container row featured-header">
                    <div class="featured-title">
                        <h4>Featured Services</h4>
                    </div>
                    <div class="featured-see-all">
                        <h6>See all services ></h6>
                    </div>
                </div>
    
                <!---Featured Services -->
                  <div class="featured-services">
                    <div class="card-deck">
                        <div class="card">
                          <img src="./assets/img/featured_services/bonheur_apparel/logo.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <a href="#" class="card-title stretched-link">Bonheur Apparel</a>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          </div>
                          <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                          </div>
                        </div>
                        <div class="card">
                          <img src="./assets/img/featured_services/bonheur_apparel/logo.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <a href="#" class="card-title stretched-link">Bonheur Apparel</a>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                          </div>
                          <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                          </div>
                        </div>
                        <div class="card">
                          <img src="./assets/img/featured_services/bonheur_apparel/logo.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <a href="#" class="card-title stretched-link">Bonheur Apparel</a>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                          </div>
                          <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                          </div>
                        </div>
                      </div>
                  </div>
            </div>

            <!-- New Business ROW-->
            <div class="newbusinesses">
                <!---Featured Title -->
                <div class="container row featured-header">
                    <div class="featured-title">
                        <h4>New Services</h4>
                    </div>
                    <div class="featured-see-all">
                        <h6>See all new Services ></h6>
                    </div>
                </div>
    
                <!---Featured Services -->
                  <div class="featured-services">
                    <div class="card-deck">
                        <div class="card">
                          <img src="./assets/img/featured_services/bonheur_apparel/logo.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <a href="#" class="card-title stretched-link">Bonheur Apparel</a>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          </div>
                          <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                          </div>
                        </div>
                        <div class="card">
                          <img src="./assets/img/featured_services/bonheur_apparel/logo.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <a href="#" class="card-title stretched-link">Bonheur Apparel</a>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                          </div>
                          <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                          </div>
                        </div>
                        <div class="card">
                          <img src="./assets/img/featured_services/bonheur_apparel/logo.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <a href="#" class="card-title stretched-link">Bonheur Apparel</a>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                          </div>
                          <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                          </div>
                        </div>
                      </div>
                  </div>
            </div>
        </div>
        
        <!-- FOOTER 
        ! URGENT DEVELOP!!! Create FOOTER
        -->

        <footer class="footer-div">
          <div class="container-fluid row connserv-container">
            <div class="col-4">
              <img class="connserv-logo" src="./assets/img/ConnServ_Logo.png" alt="Connserv Image">
            </div>
            <div class="col-8 footer-links">
              <div class="row">
                <div class="col-4">
                  <p>COMPANY</p>
                  <ul>
                    <li><a href="#">News</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                  </ul>
                </div>
                <div class="col-4">
                  <p>LEARN MORE</p>
                  <ul>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Developers</a></li>
                    <li><a href="#">Service Program</a></li>
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

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    </body>
</html>
