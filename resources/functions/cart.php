<?php

function addToCart($id, $quantity){
	if(product_check($id)){
		if (isset($_SESSION['cart'][$id])) {
			$_SESSION['cart'][$id] += $quantity;
		} else {
			$_SESSION['cart'][$id] = $quantity;
		}
		return true;
	} else {
		return false;
	}
}


// CART BUTTON
if (!empty($_SESSION['cart'])) {
    $cartTotal = getCartTotal();
//    echo "<a id=\"cart-button\" href=\"cart.php\">";
//    echo "<img src=\"images/cart.png\" alt=\"cart\" width=\"25\"> £" . number_format($cartTotal, 2, '.', '');
//    echo "</a>";
}
function getCartTotal(){
	$total = 0;
	foreach($_SESSION['cart'] as $id => $quantity){
		$details = product_details($id);
		$subtotal = $details['price']*$quantity;
		
		$total += $subtotal;
	}
	return $total;
}

