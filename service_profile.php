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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Online Bootstrap Link -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        <!-- Online JS Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="./css/service_profile.css">
        <title>ConnServ</title>
    </head>
    <body>

    <?php include_once './navbar.php';?>
      <div class="col-12" style="display: flex;">
       <div class="col-3">
          <div class="container">
            <div class="leftcol">

              <!--SERVICE IMG AND ADDRESS-->

              <div class="service-image">
              <img src="./assets/img/featured_services/bonheur_apparel/logo.jpg" width="500px" class="img-fluid">
              </div>
  
              <div class="address text-dark bg-light mb-3 d-inline-block" style="max-width: 20rem;">
                <div class="card-header">Address</div>
                <div class="card-body">
                  <h4 class="card-title">189 Malanday St. Brgy Malamig,
                    Boni Ave. Mandaluyong </h4>
                </div>
              </div>

                <!--SERVICE MAP-->
              <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d482.8365313238559!2d121.0536800182533!3d14.502348022497767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x472aae8a079e213e!2sBAHAY%20NI%20BRYAN!5e0!3m2!1sen!2sph!4v1646320618218!5m2!1sen!2sph" width="270" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
          </div>
        </div>
        <div class="col-9">
          <div class="col-12">

            <div class="service-title col-12" style="padding: 4rem 0 1rem;">
              <div class="col-12 top_container" style="display: flex;">
                <h1 class="font-weight-bold col-11" title="Bonheur Apparel Incorporated Group of Company">Bonheur Apparel Incorporated Group of Company</h1>           
                <div class="verified-badge col-1">
                  <img src="https://img.icons8.com/fluency/48/000000/verified-badge.png" title="Verified">
                </div>
              </div>
              <row class="col-12 bottom_container" style="display: flex;">
                <div class="rate_content col-8">
                  <div class="rate">
                    <input type="radio" id="star5" name="rate" value="5" />
                    <label for="star5" title="Great">5 stars</label>
                    <input type="radio" id="star4" name="rate" value="4" />
                    <label for="star4" title="Awesome">4 stars</label>
                    <input type="radio" id="star3" name="rate" value="3" />
                    <label for="star3" title="Fantastic">3 stars</label>
                    <input type="radio" id="star2" name="rate" value="2" />
                    <label for="star2" title="Better">2 stars</label>
                    <input type="radio" id="star1" name="rate" value="1" />
                    <label for="star1" title="Good">1 star</label>
                  </div>
                </div>
                <div class="rightcol col-4">
                  <a href="#" class="btn purple block">Book an Appointment</a>
                </div>
              </row> 
              
              
            </div>
          </div>
          <div class="col-12">
            <div class="centercol">
              <div class="offered-service">
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    <div class="slider-item swiper-slide">
                      <div class="slider-image-wrapper">
                        <img class="slider-image" src="./assets/img/featured_services/bonheur_apparel/logo.jpg" alt="SliderImg">
                        </div>
                      <div class="slider-item-content">
                        <h1>Description</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                      </div>
                    </div>
                    <div class="slider-item swiper-slide">
                      <div class="slider-image-wrapper">
                        <img class="slider-image" src="./assets/img/categories/another/Clothing1.jpg" alt="SliderImg">
                        </div>
                      <div class="slider-item-content">
                        <h1>Services</h1>
                        <p>Tayloring, Dressmaking, Bulk Orders</p>
                      </div>
                    </div>
                    <div class="slider-item swiper-slide">
                      <div class="slider-image-wrapper">
                        <img class="slider-image" src="./assets/img/bg_image.jpg" alt="SliderImg">
                        </div>
                      <div class="slider-item-content">
                        <h1>Contacts</h1>
                        <p>09101926394 / 8398-3724</p>
                      </div>
                    </div>
    
                    <div class="slider-item swiper-slide">
                      <div class="slider-image-wrapper">
                        <img class="slider-image" src="./assets/img/categories/another/Business.jpg" alt="SliderImg">
                      </div>
                      <div class="slider-item-content">
                        <h1>Socials</h1>
                        <div class="social">
                          <a class="social-link fa fa-twitter" href="#" >
                           
                          </a>
                          <a class="social-link fa fa-facebook" href="#" >
                          </a>
    
                          <a class="social-link fa fa-instagram" href="#" >
                          </a>
    
                          <a class="social-link fa fa-youtube-play" href="#" >
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>        
                  <div class="swiper-pagination"></div>
                </div>
              </div>
                
    
              </div> 
          </div>
        </div>
      </div>

            <!-- RELATED SERVICE -->
          <div class="col-12 related_container" style="display: flex;">
            <div class="related-service col-12">
              <div class="col-12">
                <h2>Related Service</h2>
              </div>
              <div class="cards col-12">
                <div class="card col-4">
                  <div class="card_img card1">
                  </div>
                    <h3>SERVICE NAME</h3>
                    <div class="line">
                    </div>
                    <p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.  </p>
                </div>


                <div class="card col-4">
                  <div class="card_img card2">
                  </div>
                  <h3>SERVICE NAME</h3>
                  <div class="line">
                  </div>
                  <p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>

                <div class="card col-4">
                  <div class="card_img card3">
                  </div>
                  <h3>SERVICE NAME</h3>
                  <div class="line">
                  </div>
                  <p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.  </p>
                </div>

              </div>
            </div>
          </div>

  
        <!-- FOOTER -->

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
        <!-- JS SCRIPTS --> 
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.5/swiper-bundle.min.js'></script>
        <script src="./js/chat/offered_service.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    </body>
</html>