<?php
include "resources/initiate.php";
$title = "Pitt Liquor Store";
include "components/header.php";
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

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php">Pitt <span>liquor</span> <span>store</span></a>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                <li class="nav-item dropdown">
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

<div class="hero-wrap" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-8 ftco-animate d-flex align-items-end">
                <div class="text w-100 text-center">
                    <h1 class="mb-4">Good <span>Drink</span> for Good <span>Moments</span>.</h1>
                    	            <p><a href="product.php" class="btn btn-primary py-2 px-4">Shop Now</a> <a href="about.php" class="btn btn-white btn-outline-white py-2 px-4">Read more</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-intro">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-4 d-flex">
                <div class="intro d-lg-flex w-100 ftco-animate">
                    <div class="icon">
                        <span class="flaticon-support"></span>
                    </div>
                    <div class="text">
                        <h2>Online Support 24/7</h2>
                        <p>Our platform is available through out and deliveries are at any time as per one's order.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="intro color-1 d-lg-flex w-100 ftco-animate">
                    <div class="icon">
                        <span class="flaticon-cashback"></span>
                    </div>
                    <div class="text">
                        <h2>Money Back Guarantee</h2>
                        <p>In the event of delivery of the wrong product, one may order another product within the
                            same price range or refund of the funds payed.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="intro color-2 d-lg-flex w-100 ftco-animate">
                    <div class="icon">
                        <span class="flaticon-free-delivery"></span>
                    </div>
                    <div class="text">
                        <h2>Delivery and Return Policies</h2>
                        <p>Within Nairobi CBD we offer free delivery services. One may return the product if it
                            was not the one ordered.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row">
            <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
            </div>
            <div class="col-md-6 wrap-about pl-md-5 ftco-animate py-5">
                <div class="heading-section">
                    <span class="subheading">Since 2017</span>
                    <h2 class="mb-4">Desire Meets A New Taste</h2>

                    <p >We pride ourselves in delivering the best products at affordable prices. Our services are highly recommended.</p>
                    <p> For all your liquor needs, we will deliver timely.</p>
                    <p class="year">
                        <strong class="number" data-number="5">0</strong>
                        <span>Years of Experience In Business</span>
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-4 ">
                <div class="sort w-100 text-center ftco-animate">
                    <div class="img" style="background-image: url(images/kind-1.jpg);"></div>
                    <h3>Brandy</h3>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 ">
                <div class="sort w-100 text-center ftco-animate">
                    <div class="img" style="background-image: url(images/kind-2.jpg);"></div>
                    <h3>Gin</h3>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 ">
                <div class="sort w-100 text-center ftco-animate">
                    <div class="img" style="background-image: url(images/kind-3.jpg);"></div>
                    <h3>Rum</h3>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 ">
                <div class="sort w-100 text-center ftco-animate">
                    <div class="img" style="background-image: url(images/kind-4.jpg);"></div>
                    <h3>Tequila</h3>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 ">
                <div class="sort w-100 text-center ftco-animate">
                    <div class="img" style="background-image: url(images/kind-5.jpg);"></div>
                    <h3>Vodka</h3>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 ">
                <div class="sort w-100 text-center ftco-animate">
                    <div class="img" style="background-image: url(images/kind-6.jpg);"></div>
                    <h3>Whiskey</h3>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Our Delightful offerings</span>
                <h2>Tastefully Yours</h2>
            </div>
        </div>
        <div class="overlay"></div>
        <div class="container">
        <div class="row">
            <div class="col-md-3 d-flex">
                <?php
                //RETRIEVES 4 RECENT PRODUCTS FROM DIFFERENT CATEGORIES
                $sql = "SELECT * FROM product WHERE created IN (select MAX(created) FROM product GROUP BY drink) LIMIT 4";
                $page=mysqli_query($db, $sql);
                while ($row=mysqli_fetch_assoc($page)) {
                    echo product_thumb($row);
                }
                ?>

            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <a href="product.php" class="btn btn-primary d-block">View All Products <span class="fa fa-long-arrow-right"></span></a>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section img" style="background-image: url(images/bg_4.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5">
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
<script src="js/main.js"></script>

</body>
</html>
