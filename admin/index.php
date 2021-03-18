<?php
	include_once "../vendor/checkauth.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/adminmain.css" />

		<title>adminauth</title>

		<style>
			@font-face {
				font-family: Pecita;
				src: url(../fonts/20180.otf);
			}
		</style>
	</head>
	<body>
		<?php if (isset($_GET['error'])) { echo "<H1>WRONG DATA</H1>"; } ?>
		<div class="wrapper">
			<div class="center">
				<form action="../vendor/login.php" method="post" id="login-form" class="login-form">
					<input type="text" id="login" name="login" required />
					<input type="password" id="pass" name="pass" autocomplete="new-password" required />
					<input type="submit" class="button signin" value="SIGN IN" />
				</form>
			</div>
		</div>
		<?php echo "<p>".$_SESSION['password']."</p>"; ?>
	</body>
</html>