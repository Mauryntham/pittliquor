<?php 
	include "resources/initiate.php";
	$title = "Pitt Liquor  Store - Login";


if (empty($_POST) === false) {
    $useremail = sanitize_data_no_spaces($_POST['useremail']);
    $userpass = sanitize_data_no_spaces($_POST['userpass']);

    if (empty($useremail) || empty($userpass)) {
        $_SESSION['error'] = "You need to enter a username and password";
    } else if (user_check($useremail) === false) {
        $_SESSION['error'] = "No such user";
    } else {
        $login = login($useremail, $userpass);
        if ($login === false) {
            $_SESSION['error'] = "Incorrect password";
        } else {
            $_SESSION['id'] = $login;
            $_SESSION['error'] = null;
            header('Location: index.php');
            //IF LOGIN SUCCESSFUL, SETS SESSION ID VARIABLE AND SENDS USER TO HOMEPAGE
        }
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
<div class="hero-wrap" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="row no-gutters slider-text align-content-center justify-content-center">
        <div class="reg-box">
            <form method="post" action="login.php" class="reg-box" >
			<h1 style="color: black">Sign in</h1>
			<table class="tab-form" style="color: royalblue"  >
				<tr>
					<th style="font-size: 40px">Email:</th>
					<td><input type="email" name="useremail" value="
					<?php if(isset($useremail)){echo htmlentities($useremail);} ?>"/></td>
				</tr>
				<tr>
					<th style="font-size: 40px">Password:</th>
					<td><input type="password" name="userpass"/></td>
				</tr>
				<?php
				if (isset($_SESSION['error'])){
					echo "<tr><th colspan=\"2\" class=\"error\">".$_SESSION['error']."</th></tr>";
					$_SESSION['error'] = null;
				}?>

				<tr>
					<th colspan="6"><input type="submit" value="Sign in" name="submit" style="padding: 10px"/></th>
				</tr>
			</table>
		</form>
        </div>
	</div>
    </div>
</div>
</body>
</html>
