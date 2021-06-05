<?php

/**
 * ----------------------------------------------------------------
 * Set the CSRF Token
 * ----------------------------------------------------------------
 * If the CSRF token is not already set, set it now.
 * This will prevent Cross-site Request Forgery attacks.
 */

session_start();

if (!isset($_SESSION["pzplphp-csrf-token"])) {
	$_SESSION["pzplphp-csrf-token"] = bin2hex(random_bytes(32));
}

require_once "../Headers.php";

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Remix</title>
	<!-- We really don't want to show this page in search results -->
	<meta name="robots" content="noindex, nofollow, max-image-preview:none, max-snippet:0, max-video-preview:0">
	<meta name="googlebot" content="noindex, nofollow, max-image-preview:none, max-snippet:0, max-video-preview:0">
	<meta name="bingbot" content="noindex, nofollow, max-image-preview:none, max-snippet:0, max-video-preview:0">
	<meta name="yandex" content="noindex, nofollow, max-image-preview:none, max-snippet:0, max-video-preview:0">
	<link rel="stylesheet" href="pzplui.css">
	<link rel="stylesheet" href="style.css">
</head>

<body class="pzplui-strict-mode dark-mode" itemscope itemtype="https://schema.org/WebSite">
	<link itemprop="url" href="https://pzpl.xyz/codewell/remix/setup_remix.php">
	<meta itemprop="name" content="Remix Setup">
	<nav itemscope itemtype="https://schema.org/SiteNavigationElement" class="navbar">
		<div class="navbar-left">
			<a href="./index.php">
				<img src="./img/back_arrow.svg" decoding="async" loading="lazy" alt="Remix logo" class="navbar-brand" aria-hidden="true">
				<b>Back to homepage</b>
			</a>
		</div>
	</nav>

	<main id="onboarding">
		<div class="flexbox">
			<img src="./img/remix.svg" decoding="async" loading="lazy" alt="Remix" width="99" height="26">
			<p>Step 1/3</p>
		</div>
		<noscript>
			<h1>We're sorry, but you need to enable JavaScript to sign up for remix.</h1>
		</noscript>
		<b>Set up your Remix Enviroment</b>
		<p>This will take less than a minute, we use this information to customize Remix for you;</p>

		<div class="exchange"></div>

		<div>
			<div class="flexbox flexbox-not-tablet">
				<a href="javascript:void(0);" data-action="back">Previous</a>
				<button class="btn btn-lg btn-danger" data-action="next"><b>Next</b></button>
			</div>
			<p>No Copyright, 2021 Remix. No rights reserved.</p>
		</div>
	</main>

	<template id="template__-1">
		<button class="btn btn-lg btn-white mr5" data-plan="personal">
			<b>Personal Use</b>
			<p>I’m using this for a team of &lt;2.</p>
		</button>
		<button class="btn btn-lg btn-white" data-plan="corporate">
			<b>Corporate Use</b>
			<p>I’m using this for a team of &gt;2.</p>
		</button>
	</template>

	<template id="template__0">
		<br>
		<button class="btn btn-danger btn-block btn-lg" onclick="linkAccount(this);">
			<img src="./img/figma-logo.svg" decoding="async" loading="lazy" alt="Figma" aria-hidden="true" width="14" height="21">
			<b>Link figma account</b>
		</button>
		<br>
	</template>

	<template id="template__1">
		<br>
		<form action="email.php" method="post" class="flexbox">
			<input type="hidden" name="pzplphp-csrf-token" value="<?= $_SESSION["pzplphp-csrf-token"] ?>">
			<div class="inputs">
				<label for="email">Enter email adress</label>
				<input type="text" name="email" placeholder="hello@example.com" required>
				<button class="btn btn-danger btn-lg baton">
					<img src="img/send.svg" alt="Send" aria-hidden="true" loading="lazy" decoding="async">
					Send Code
				</button>
			</div>
		</form>
		<br>
	</template>

	<!-- 
		I Decided to play around with analytics, see if they provide any useful data for my website
		Decided on Plausible, since Google Analytics & Yandex.Metrica invade user's privacy, and Matomo weights 20kB!
		I made the analytics public, so you can just go to https://plausible.io/pzpl.xyz?page=%2Fcodewell%2Fremix%2F and see them for yourself.
	-->
	<script async defer data-domain="pzpl.xyz" src="https://plausible.io/js/plausible.js"></script>
	<script src="./darkMode.js" defer async></script>
	<script src="./setup.js" defer async></script>
</body>

</html>