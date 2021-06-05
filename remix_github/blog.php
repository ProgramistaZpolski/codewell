<?php

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
	<link itemprop="url" href="https://pzpl.xyz/codewell/remix/">
	<meta itemprop="name" content="Remix">
	<nav itemscope itemtype="https://schema.org/SiteNavigationElement" class="navbar">
		<div class="navbar-left">
			<a href="./index.php"><img src="./img/remix.svg" decoding="async" loading="lazy" alt="Remix logo" class="navbar-brand"></a>
			<ul>
				<li>
					<a href="#collaboration">Product</a>
				</li>
				<li>
					<a href="#pricing">Pricing</a>
				</li>
				<li>
					<a href="javascript:alert('Sorry our devs haven\'t made the sketch version yet');">For Sketch</a>
				</li>
			</ul>
		</div>
		<div class="navbar-right">
			<button class="btn btn-danger">
				<img src="./img/figma-logo.svg" decoding="async" loading="lazy" alt="Figma" aria-hidden="true" width="14" height="21"> Get Figma Plugin
			</button>
		</div>
	</nav>

	<main>
		<div class="article-grid">
			<article>
				<img src="./img/blog1.png" decoding="async" loading="lazy" alt="Blog Post Cover Image" aria-hidden="true" class="img-fluid">
				<div class="flexbox">
					<b>Celebrating Earth Day at Remix</b>
					<b>April 12, 2021</b>
				</div>
				<p>One thing COVID has shown us is how Earth can still be saved. See how we’re contributing to making Earth a better place at Remix.</p>
			</article>

			<article>
				<img src="./img/blog2.png" decoding="async" loading="lazy" alt="Blog Post Cover Image" aria-hidden="true" class="img-fluid">
				<div class="flexbox">
					<b>Productivity</b>
					<b>Jan 15, 2021</b>
				</div>
				<p>Tips on being more productive by Remix.</p>
			</article>
		
			<article>
				<img src="./img/blog3.png" decoding="async" loading="lazy" alt="Blog Post Cover Image" aria-hidden="true" class="img-fluid">
				<div class="flexbox">
					<b>Developer Hand-off Explained</b>
					<b>May 21, 2021</b>
				</div>
				<p>Our team goes over what developer hand-off is in complete details.</p>
			</article>
		
			<article>
				<img src="./img/blog4.png" decoding="async" loading="lazy" alt="Blog Post Cover Image" aria-hidden="true" class="img-fluid">
				<div class="flexbox">
					<b>Using Figma Variants</b>
					<b>April 22, 2021</b>
				</div>
				<p>Learn how to create Figma variants for components to facilitate developer hand offs.</p>
			</article>
		
		</div>
	</main>

	<footer>
		<div class="flexbox">
			<div class="column">
				<img src="./img/footer.svg" decoding="async" loading="lazy" alt="Remix">
				<p>
					Remix is a Figma and Sketch plugin that was made with Developers in mind. Create custom React components in seconds, copy CSS code in one click, and export your assets effortlessly.
				</p>
			</div>
			<div class="column">
				<p>Supported</p>
				<p>Sketch</p>
				<p>Figma</p>
			</div>
			<div class="column">
				<p>Developers</p>
				<p>API</p>
				<p>Documentation</p>
			</div>
			<div class="column">
				<p>Company</p>
				<p>Career</p>
				<p>Support</p>
				<p>Culture</p>
			</div>
		</div>
		<div>
			<p>© Remix 2021</p>
			<div>
				<a href="mailto:admin@pzpl.xyz">support@remix.com</a>
				<a href="javascript:javascript('sorry we dont know how to use twitter');">
					<img src="./img/twitter.svg" decoding="async" loading="lazy" alt="twitter">
				</a>
				<a href="https://youtu.be/BylLTX05jSY?t=7783">
					<img src="./img/facebook.svg" decoding="async" loading="lazy" alt="facebook">
				</a>
			</div>
		</div>
	</footer>

	<!-- 
		I Decided to play around with analytics, see if they provide any useful data for my website
		Decided on Plausible, since Google Analytics & Yandex.Metrica invade user's privacy, and Matomo weights 20kB!
		I made the analytics public, so you can just go to https://plausible.io/pzpl.xyz?page=%2Fcodewell%2Fremix%2F and see them for yourself.
	-->
	<script async defer data-domain="pzpl.xyz" src="https://plausible.io/js/plausible.js"></script>
	<script src="./darkMode.js" defer async></script>
	<script>
		"use strict";
		document.querySelectorAll("article").forEach(el => {
			el.onclick = () => {
				alert("sorry we havent written this article yet");
			};
		});
	</script>
</body>

</html>