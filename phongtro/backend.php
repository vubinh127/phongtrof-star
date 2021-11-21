<!DOCTYPE html>
<?php
	session_start();
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trùm F-Star</title>
	<link rel="stylesheet" href="css/backend.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="font/fontawesome5/css/all.min.css">
</head>
<body>
	<header>
		<div class="menu-bar">
			<div class="container">
				<div class="logo">
					<img src="css/img/logo.png" alt="logo">
				</div>
				<div class="menu">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="https://www.facebook.com/Ph%C3%B2ng-Tr%E1%BB%8D-F-Star-100954355227894">Page</a></li>
					</ul>
				</div>
			</div>		
		</div>
	</header>
	<main>
		<div class="background-login">
			<img src="css/img/login.jpg" alt="">
			<h1>LOGIN</h1>
			<i class="fas fa-home"></i>
			<h6>Home</h6>
			<i class="fas fa-angle-double-right"></i>
			<a href="">Login</a>
		</div>
		<div class="wrap-login">
			<table>
				<div class="join-login">
					<h1 class="login"><a href="">Login</a></h1>
				</div>
				<div class="text-login">
					<form method="POST" action="xllogin.php" >
						<center>
							<h6>Username or email address</h6>
							<input type="text" name="txtUser" size="75" required><br><br>
							<h6>Password</h6>
							<input type="password" name="txtPassword" size="75" required><br><br>

							<input type="checkbox" id="account" name="account" value="account">
								<label for="account">Remember me</label><br><br>

							<button name="btn_submit" type="submit">Đăng nhập</button><br>	
						</center>
					</form>
				</div>
			</table>
		</div>
	</main>
	<footer>
	</footer>
</body>
</html>