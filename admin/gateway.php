<?php 
include "../resources/initiate.php";

if (empty($_POST) === false) {

	$adminuser = sanitize_data_no_spaces($_POST['adminuser']);
	$adminpass = sanitize_data_no_spaces($_POST['adminpass']);
	
	if(empty($adminuser)||empty($adminpass)) {
		$_SESSION['error'] = "You need to enter a username and password";
	} else {
		if(admin_login($adminuser, $adminpass)){
			$_SESSION['error'] = null;
			header('Location: admin-area.php');
			exit();
		}else{
			$_SESSION['error'] = "Incorrect password";
		}
	}
}

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
<section class="ftco-section bg-dark">
    <div class="row no-gutters slider-text align-content-center justify-content-center">
    <img src="../images/nav-bottle.png" alt=" Liquor" id="gateway-logo" width="300" height="300">
                </div>
                <div class="col-md-6">
 		<div id="admin-gate">
				<form method="post" action="gateway.php">
					<table class="tab-form">
						<tr>
							<th colspan="4"><h2>Administration</h2></th>
						</tr>
						<tr>
							<th>Username:</th>
							<td><input type="text" name="adminuser" value="
							<?php if(isset($adminuser)){echo htmlentities($adminuser);} ?>"/></td>
						</tr>
						<tr>
							<th>Password:</th>
							<td><input type="password" name="adminpass"/></td>
						</tr>
						<?php
						if (isset($_SESSION['error'])){
							echo "<tr><th colspan=\"2\" class=\"error\">".$_SESSION['error']."</th></tr>";	
						}?>

						<tr>
							<th colspan="2"><input type="submit" value="Log in" name="submit"/></th>
						</tr>
					</table>
				</form>
		</div>
            </div>
    </div>
</div>
</section>
	</body>
</html>