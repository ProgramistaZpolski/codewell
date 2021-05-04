<?php

require_once "../Headers.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Snipper - Gorgeous Code Snippets</title>
	<link rel="stylesheet" href="./pzplui.min.css">
	<link rel="stylesheet" href="style.css">
</head>

<body class="pzplui-strict-mode">
	<header>
		<nav class="navbar">
			<!-- Logo of Snipper -->
			<img src="./img/logo.svg" alt="Snipper" loading="lazy" decoding="async" onclick="notAvalible();" height="32" class="pl5">

			<!-- Navbar Buttons -->
			<div class="navbar-right column">
				<!-- Search -->
				<a href="javascript:notAvalible();">
					<img src="./img/search.svg" alt="Search" loading="lazy" decoding="async">
				</a>

				<!-- Sign In -->
				<a href="javascript:notAvalible();">
					Sign in
				</a>

				<!-- Sign Up -->
				<a href="javascript:notAvalible();">
					<button class="btn btn-dark btn-lg"><b>Get Started</b> - It's free</button>
				</a>
			</div>
		</nav>

		<!-- Hero Section -->
		<section id="hero" class="container anim-zoom">
			<!-- Title -->
			<h1 class="d3"><b>Gorgeous Code Snippets</b></h1>
			<br>
			<!-- Subtitle -->
			<h2 class="h4">
				With Snipper, create fully customizable code snippets in a matter of seconds right from your browser.
			</h2>
			<br>
			<!-- Sign Up -->
			<a href="javascript:notAvalible();">
				<button class="btn btn-dark btn-lg anim-hover-grow"><b>Get Started</b> - It's free</button>
			</a>
			<br><br>
			<p>No Credit Card Required</p>
		</section>
	</header>

	<main class="flexbox">
		<div class="column">
			<h3 class="h1"><b>A fully customizable code snippet editor</b></h3>
			<p class="h4">Fully customize the color sheme of your code snippet, or use our own premade color schemes.
				Export your code in JPG, PDF, PNG or any of the other 10+ common extensions.</p>
			<br>
			<!-- Sign Up -->
			<a href="javascript:notAvalible();">
				<button class="btn btn-dark btn-lg"><b>Get Started</b> - It's free</button>
			</a>
		</div>
		<img src="./img/customizable_image.png" loading="lazy" decoding="async" alt="A color selection palette with a code snippet behind." id="snippet">
	</main>

	<footer>
		<nav class="navbar">
			<!-- Logo of Snipper -->
			<img src="./img/logo.svg" alt="Snipper" loading="lazy" decoding="async" onclick="notAvalible();" height="32" class="pl5">

			<div class="navbar-right column">
				<a href="javascript:notAvalible();">
					Terms and Conditions
				</a>

				<a href="javascript:notAvalible();">
					Privacy Policy
				</a>
			</div>
		</nav>
	</footer>

	<script defer async>
		"use strict";

		function notAvalible() {
			alert("Sorry, this feature is not avalible in this demo");
		};
	</script>
</body>

</html>