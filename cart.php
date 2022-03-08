<?php
	include "resources/initiate.php";
	$title = "Pitt Liquor Store";
//	$style = "styles/cart.css";
	
	
	foreach ($_POST as $id => $quantity){
		if ($quantity == 0){
			unset($_SESSION['cart'][$id]);
		} else {
			$_SESSION['cart'][$id] = $quantity;
		}
	}
	
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
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate mb-5 text-center">
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Cart <i class="fa fa-chevron-right"></i></span></p>
                <h2 class="mb-0 bread">My Cart</h2>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container" >
        <div class="row justify-content-center" style="width: ">
            <div class="table-wrap">
                <h1>Shopping Cart</h1>
                <form id="q" method="post">
                    <table id="cart">
                        <tr>
                            <th> </th>
                            <th> </th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Sub-total</th>
                            <th> </th>
                        </tr>

                        <?php
                        $total = 0;
                        foreach($_SESSION['cart'] as $id => $quantity){
                            $details = product_details($id);
                            $subtotal = $details['price']*$quantity;
                            echo "<tr class=\"alert\" role=\"alert\">";
                            echo "<td>
						    	<label class=\"checkbox-wrap checkbox-primary\">
								 <input type=\"checkbox\" >
								 <span class=\"checkmark\"></span>
								 </label>
						    	 </td>";
                            echo "<td><img src=\"product_images/".$details['image']."\" alt=\"".$details['name']."\" width=\"200\" ></td>";
                            echo "<td><a href=\"detail.php?product=".$id."\" <span class=\"mr-2\">".$details['name']."</span></a></td>";
                            echo "<td <span class=\"mr-2\">&pound;".number_format($details['price'], 2, '.', '')."</span></td>";
                            echo "<td <span class=\"mr-2\"><input type=\"number\" name =\"".$id."\" min=\"0\" value=\"".$quantity."\" style=\" width:3rem; \"/></span></td>";
                            echo "<td>&pound;".number_format($subtotal, 2, '.', '')."</td>";
                            echo "<td>
						      	    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
				            	    <span aria-hidden=\"true\"><i class=\"fa fa-close\"></i></span>
				          	        </button>
				        	      </td>";
                            echo "</tr>";
                            $total += $subtotal;
                                }
                                ?>
                            </table>
                        </form>
                        <button form="q" formaction="cart.php" type="submit" id="update">Update Cart</button>
                        <div class="row justify-content-center">
                        <div id="cart-total">
                            <?php
                            echo "<strong>&pound;".number_format($total, 2, '.', '')."<strong>
                                  <br><a class=\"redbutton\" href=\"product.php\"><span class=\"mr-3\"> Continue Shopping </span></a><a class=\"redbutton\" href=\"#\"<span class=\"mr-\"> Checkout </span></a>";
                            ?>
                        </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
        </div>
    </div>
</section>


<?php
	include "components/footer.php";
?>


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

