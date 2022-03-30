<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <?php include_once './includes/bootstrap_con.php';?>

    <title>Document</title>
</head>
<body>

<ul class="nav nav-pills">
  <li><a href="#home" data-toggle="pill"><span class="glyphicon glyphicon-home"></span> Home</a></li>
  <li><a href="#menu" data-toggle="pill"><span class="glyphicon glyphicon-cutlery"></span> Menu</a></li>
  <li><a href="#about" data-toggle="pill">About Us</a></li>
  <li><a href="#contact" data-toggle="pill">Contact Us</a></li>
  <li><a href="#directions" data-toggle="pill">directions</a></li>
</ul><!-- End Nav pills -->

<!-- pill panes -->
<div class="pill-content">
  <div class="pill-pane active" id="home">

    <!-- Carousel -->
   <div id="carousel-with-captions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel-with-captions" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-with-captions" data-slide-to="1"></li>
      <li data-target="#carousel-with-captions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item">
        <img src='img\carousel\N2.-Pad-Sea-Ewew.jpg'  width="100%" alt="First slide image">
        <div class="carousel-caption">
          <h3>N2. Pad Sea Ewew (ผัดซีอิ๋ว)</h3>
          <p>Stir fried thick rice noodles with egg, Chinese broccoli, broccoli and beansprouts in sweet black soy sauce.</p>
        </div>
      </div>
      <div class="item active">
        <img src="C:\Users\Eduardo\Desktop\Pi's Thai\img\carousel\N1.-Pad-Thai.jpg" width="100%" alt="Second slide image">
        <div class="carousel-caption">
          <h3>N1. Pad Thai (ผัดไทย)</h3>
          <p>Notably one of the best known Thai dish worldwide. Our Pad Thai is made with thin rice noodles stir fried with meat of your choice, egg, bean sprouts and green onions. Then topped with crushed peanuts and a side of lime to add some crunch and an extra zest!</p>
        </div>
      </div>
      <div class="item">
        <img src="C:\Users\Eduardo\Desktop\Pi's Thai\img\carousel\N3.-Pad-Rard-Na.jpg" width="100%" alt="Third slide image">
        <div class="carousel-caption">
          <h3>N3. Pad Rard Na (ราดหน้า)</h3>
          <p>Stir fried thick rice noodles topped with sautéd broccoli and Chinese broccoli in soybean paste brown soy gravy.</p>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#carousel-with-captions" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-with-captions" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div><!-- End Carousel -->
  </div><!-- End Pill pane home -->

  <div class="pill-pane" id="menu">

    <ul class="nav nav-pills">
      <li class="active"><a href="#Noodles" data-toggle="pill">Noodles</a></li>
      <li><a href="#FriedRice" data-toggle="pill">Fried Rice</a></li>
      <li><a href="#Entrees" data-toggle="pill">Entrees</a></li>
      <li><a href="#Soups-Salads" data-toggle="pill">Soups &amp; Salads</a></li>
    </ul>
    <div class="pill-content">
    </div>         
  </div><!-- End Pill pane menu -->

  <div class="pill-pane" id="about">
    <h3>about us</h3>
    <p>we live in a crazy  jungle</p>
  </div><!-- End Pill pane about us -->

  <div class="pill-pane" id="contact"></div><!-- End Pill pane contact us -->

  <div class="pill-pane" id="directions"></div><!-- End Pill pane directions -->
</div><!-- End Pill panes -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>