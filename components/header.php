
<div class="wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <p class="mb-0 phone pl-md-2">
                    <a href="index.php"><img src="images/nav-bottle.png" alt="bottle" height="45" class="bottle"></a>
                    <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +254712345689</a>
                    <a href="#"><span class="fa fa-paper-plane mr-1"></span> maureen@gmail.com</a>
                </p>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <div class="social-media mr-4">
                    <p class="mb-0 d-flex" style="padding: 5px">
                    <form method="get" action="product.php" id="search-box">
                        <input name="search" type="text" placeholder="Search..."/>
                    </form>
                    </p>
                </div>
                <div class="reg " >
                    <p class="mb-0" style="padding: 5px" >
                        <?php
                        echo "<div id=\"user-area\">";
                        //SHOWS EITHER 'MY ACCOUNT' OR 'LOGIN | REGISTER'
                        if (logged_in()){
                         include "user-area.php";
                         } else {
                         include "user-login.php";
                         }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>