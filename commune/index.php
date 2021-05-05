<?php

require_once "../Headers.php";

session_start();

if (!isset($_SESSION["pzplphp-csrf-token"])) {
	$_SESSION["pzplphp-csrf-token"] = bin2hex(random_bytes(32));
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Commune</title>
	<link rel="stylesheet" href="./pzplui.min.css">
	<link rel="stylesheet" href="./style.css">
</head>

<body class="pzplui-strict-mode p7">
	<header>
		<nav class="navbar">
			<img src="./assets/logo.svg" decoding="async" loading="lazy" alt="Commune Rocket Logo" class="navbar-brand">
			<ul>
				<li><a href="javascript:notAvailable();">Features</a></li>
				<li><a href="javascript:notAvailable();">Affiliates</a></li>
				<li><a href="javascript:notAvailable();">Pricing</a></li>
				<li><a href="javascript:notAvailable();">Communities</a></li>
				<li><button class="btn btn-normal btn-lg" onclick="notAvailable();">Join Waitlist</button></li>
			</ul>
		</nav>
	</header>

	<main>
		<section class="flexbox" id="hero">
			<section id="hero-text" class="column p3 m3">
				<p class="h3">
					<span class="badge badge-normal badge-pill p3">
						We are now allowing early-access for users. <u>Learn more</u>.
					</span>
				</p>
				<h1 class="d3"><b>Build a highly-engaged community with no effort.</b></h1>
				<h2>Commune offers you the tools you need to build a highly-engaged community with little to no effort.
					Simply setup your Commune workspace, and manage everything from members to content from one central dashboard.</h2>
				<form action="./waitlist.php" method="post">
					<input type="hidden" name="pzplphp-csrf-token" value="<?= $_SESSION["pzplphp-csrf-token"] ?>">
					<fieldset class="inputs" aria-label="Join the waitlist">
						<legend>Join the waitlist</legend>
						<label for="email">Enter your email address</label>
						<input type="email" name="email" id="email" placeholder="bob@bobmail.com">
						<button type="submit" class="btn btn-normal btn-lg">Join Waitlist</button>
					</fieldset>
				</form>
			</section>
			<img src="./assets/illustration.png" decoding="async" loading="lazy" alt="Some weird thingy that I don't know how to describe">
		</section>

		<section id="used-by">
			<h3><b>Used by these companies:</b></h3>
			<img class="m2" src="./assets/atlassian.svg" decoding="async" loading="lazy" alt="Atlassian">
			<img class="m2" src="./assets/behance.svg" decoding="async" loading="lazy" alt="Behance">
			<img class="m2" src="./assets/bing.svg" decoding="async" loading="lazy" alt="Bing">
			<img class="m2" src="./assets/bitbucket.svg" decoding="async" loading="lazy" alt="Bitbucket">
			<img class="m2" src="./assets/dropbox.svg" decoding="async" loading="lazy" alt="dropbox">
			<img class="m2" src="./assets/twitch.svg" decoding="async" loading="lazy" alt="Twitch">
			<img class="m2" src="./assets/twitter.svg" decoding="async" loading="lazy" alt="Twtter">
		</section>
	</main>

	<script defer async>
		"use strict";

		function notAvailable() {
			alert("Sorry, this feature is not available in this demo.");
		};
	</script>
</body>

</html>