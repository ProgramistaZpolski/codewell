<?php

require_once "../Headers.php";

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gradie | Sign Up</title>
	<link rel="stylesheet" href="./pzplui.min.css">
	<link rel="stylesheet" href="./style.css">
</head>

<body>
	<main class="container flexbox bg-white">
		<div class="column bg-normal text-white text-center">
			<h1><b>Gradie</b></h1>
			<h2>Beautiful Gradients in Seconds.</h2>
			<img src="./img/iphone.png" decoding="async" loading="lazy" alt="Dribble Login Page" width="350">
		</div>
		<div class="column m7">
			<h3 class="h1"><b>Login</b></h3>
			<label for="email"><b>Email</b></label>
			<input type="email" name="email" id="email" placeholder="john@example.com">

			<label for="password"><b>Password</b></label>
			<input type="password" name="password" id="password" placeholder="At least 8 characters">

			<div class="flexbox">
				<input type="checkbox" name="terms" id="terms">
				<label for="terms" class="column">By creating an account, you agree to the Terms & Conditions.</label>
			</div>

			<button class="btn btn-normal btn-lg btn-block" onclick="alert(`I would make it actually send you an email, but my free hosting provider has a broken SMTP server.`);">Create an account</button>
		</div>
	</main>
</body>

</html>