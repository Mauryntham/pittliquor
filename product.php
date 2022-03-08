<?php
include "resources/initiate.php";
$title = "Pitt Liquor Store";
$style = "styles/product.css";
include "components/header.php";
$action = "product.php?view=bar";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pitt Liquor Store </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Pitt <span>liquor</span> <span>store</span></a>
            <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="product.php">Products</a>
                <a class="dropdown-item" href="cart.php">Cart</a>
                <a class="dropdown-item" href="checkout.php">Checkout</a>
              </div>
            </li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Products <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">Products</h2>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner">
                        <img src="images/typebanners/<?php
                        if(isset($_GET['drink'])){
                            echo $_GET['drink'];
                        }else{
                            echo "all";
	                    } ?>.jpg" alt="Bar" class="banner-image">
                    </div>
                    <div id="filter-box">
                    <?php include "components/filter.php"; ?>
                    <?php
                    $thumbs = 8;
                    $limit = " LIMIT $thumbs";
                    if(!isset($_GET['page'])){$_GET['page'] = 1;}
                    $offset = ($_GET['page'] - 1)*$thumbs;
                    $limit .= " OFFSET ".$offset;

                    //QUERIES DB WITH FILTERS
                    $query = construct_query();
                    $total=mysqli_query($db, $query);
                    $numberofrows = mysqli_num_rows($total);//TOTAL MATCHES

                    //RETURNS ONLY PRODUCTS IN VIEW
                    $pagequery = $query.$limit;
                    $page=mysqli_query($db, $pagequery);

                    $_SESSION['filters'] = null;
                    $_SESSION['filters'] = get_filters();
                    ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6  ">
                     <p><?php

                     echo "<div class=\"info-panel\"><i>$numberofrows products returned</i></div>";

                     if (isset($_GET['view']) && $_GET['view']=="bar") {
                         while ($row=mysqli_fetch_assoc($page)) {
                             echo product_bar($row);
                         }
                     } else {
                         while ($row=mysqli_fetch_assoc($page)) {
                             echo product_thumb($row);
                         }
                     }

                     ?></p>
                </div>
            </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6" style="padding: 10px;">
                     <div id="page-select">
                         <?php
                         $pagecount = ceil($numberofrows/$thumbs);
                         //ONLY SHOWS PAGE-SELECT IF MORE THAN 1 PAGE
                         if ($pagecount>1){
                             for($i=1;$i<=$pagecount;$i++){
                                 echo '<a class="page-buttons" ';
                                 if ($i == $_GET['page']){echo 'id="selected"';}
                                 echo ' href="product.php?page='.$i.'&'.$_SESSION['filters'].'">'.$i.'</a>';
                             }
                         }
                         ?>
                     </div>
                        </div>
                   </div>
    </div>
  </section>

<?php include "components/footer.php"; ?>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>