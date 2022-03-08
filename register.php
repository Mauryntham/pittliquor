<?php 
	include "resources/initiate.php";
	$title = "Pitt Liquor Store - Registration";
	$style = "styles/register.css";
	
	if (empty($_POST) === false) {

		$fname = sanitize_data_trim_spaces($_POST['fname']);
		$lname = sanitize_data_trim_spaces($_POST['lname']);
		$gender = sanitize_data_trim_spaces($_POST['gender']);
		$email = sanitize_data_trim_spaces($_POST['email']);
		$password = sanitize_data_trim_spaces($_POST['password']);
		$cpassword = sanitize_data_trim_spaces($_POST['cpassword']);
		
		if(empty($fname)||empty($lname)||empty($gender)||empty($email)||empty($password)||empty($cpassword)) {
			$_SESSION['error'] = "Please complete all fields";
		} else if (user_check($email) == true) {
			$_SESSION['error'] = "That email address is already registered";
		} else if ($password != $cpassword){
			$_SESSION['error'] = "Passwords do not match";
		} else {
		
			// ATTEMPT REGISTRATION
			$password = md5($password);
			try {
				global $db;
				
				$sql = "INSERT INTO user (fname, lname, gender, email, password)
						VALUES (?, ?, ?, ?, ?)";
				$stmt = $db->prepare($sql);	
				$stmt->bind_param('sssss',$fname,$lname,$gender,$email,$password);	
				$stmt->execute();
				$_SESSION['id'] = login($email, $password);
				header('Location: index.php');
				//ATTEMPTS LOGIN WITH NEW DETAILS, SETS SESSION ID AND REDIRECTS TO WELCOME PAGE
			
			} catch (exception $e) {
				$_SESSION['error'] = "Problem connecting to database";
				header('Location: register.php');
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
    <div class="row no-gutters slider-text align-items-center justify-content-center">
	<div class="reg-box">
		<form method="post" action="register.php" class="reg-box">
			<h1 style="color: black">Register</h1>
			<table class="tab-form" style="color: royalblue">
				<tr>
					<th style="font-size: 40px">First name:</th>
					<td><input type="text" name="fname" value="
					<?php if(isset($fname)){echo htmlentities($fname);} ?>"/></td>
				</tr>
				<tr>
					<th style="font-size: 40px">Last name:</th>
					<td><input type="text" name="lname" value="
					<?php if(isset($lname)){echo htmlentities($lname);} ?>"/></td>
				</tr>
				<tr>
					<th style="font-size: 40px">Gender:</th>
					<td>Male<input type="radio" name="gender" value="Male" checked/>
						Female<input type="radio" name="gender" value="Female"/></td>
				</tr>
				<tr>
					<th style="font-size: 40px">Email:</th>
					<td><input type="email" name="email" value="
					<?php if(isset($email)){echo htmlentities($email);} ?>"/></td>
				</tr>
				<tr>
					<th style="font-size: 40px">Password:</th>
					<td><input type="password" name="password" /></td>
				</tr>
				<tr>
					<th style="font-size: 40px">Confirm password:</th>
					<td style="padding: 20px"><input type="password" name="cpassword" /></td>
				</tr>
				<?php
				if (isset($_SESSION['error'])){
					echo "<tr><th colspan=\"2\" class=\"error\">".$_SESSION['error']."</th></tr>";
					$_SESSION['error'] = null;
				}?>
				<tr>
					<th colspan="6"><input type="submit" value="Register" name="submit" style="padding: 10px"/></th>
				</tr>
			</table>
		</form>
    </div>
    </div>
</div>

</body>
</html>