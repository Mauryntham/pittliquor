<?php 
session_start();


require "database/connection.php";
require "functions/generic.php";
require "functions/users.php";
require "functions/products.php";
require "functions/admin.php";
require "functions/cart.php";

$errors = array();
