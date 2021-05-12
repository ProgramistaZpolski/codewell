<?php

require_once "../Headers.php";

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UniFeed</title>
	<link rel="stylesheet" href="./pzplui.min.css">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<nav class="navbar">
		<div>
			<img src="./img/logo.svg" decoding="async" loading="lazy" alt="Unifeed" class="navbar-brand">
		</div>
		<ul>
			<li><a href="javascript:alert('Sorry, this feature is not avalible yet.');">Home</a></li>
			<li><a href="javascript:alert('Sorry, this feature is not avalible yet.');">Features</a></li>
			<li><a href="javascript:alert('Sorry, this feature is not avalible yet.');">Pricing</a></li>
			<li><a href="javascript:alert('Sorry, this feature is not avalible yet.');" class="btn btn-danger btn-lg"><b>Subscribe</b></a></li>
		</ul>
	</nav>
	<main class="m7">
		<section id="featured_content">
			<a href="post.php?id=0">
				<article class="flexbox anim-hover-grow">
					<img src="./img/featured_article.png" decoding="async" loading="lazy" alt="Article Cover" aria-hidden="true" height="266" width="392" class="p7">
					<div class="column">
						<h1><b>Weekly Newsletter: Tweets for Higher Engagements</b></h1>
						<p>In this weekly newsletter, we will be covering ten types of engaging tweets. This is the guide if you’re just starting out on Twitter.</p>
						<br>
						<div class="author flexbox">
							<img src="./img/jessica_andrews.png" decoding="async" loading="lazy" alt="Jessica Andrews" width="62" height="62">
							<div class="column">
								<b>Jessica Andrews</b>
								<p>Content Manager</p>
							</div>
						</div>
					</div>
				</article>
			</a>
		</section>

		<section class="flexbox" id="other_articles">

			<article class="column m7 anim-hover-grow">
				<a href="post.php?id=1">
					<img src="./img/organic_traffic.png" decoding="async" loading="lazy" alt="Article Cover" aria-hidden="true" class="img-fluid">
					<h2><b>7 Tips for Organic Traffic</b></h2>
					<p>From SEO to integrating with Paid Advertising, this article covers it all.</p>
					<br>
					<div class="author flexbox">
						<img src="./img/spencer_david.png" decoding="async" loading="lazy" alt="Spencer David" width="62" height="62">
						<div class="column">
							<b>Spencer David</b>
							<p>SEO Specialist</p>
						</div>
					</div>
				</a>
			</article>

			<article class="column m7 anim-hover-grow">
				<a href="post.php?id=2">
					<img src="./img/start_buisness.png" decoding="async" loading="lazy" alt="Article Cover" aria-hidden="true" class="img-fluid">
					<h2><b>How To Start Your Own Business</b></h2>
					<p>Starting your own business in 2021 has never been easier.</p>
					<br>
					<div class="author flexbox">
						<img src="./img/sara_frey.png" decoding="async" loading="lazy" alt="Sara Frey" width="62" height="62">
						<div class="column">
							<b>Sara Frey</b>
							<p>Business Leader</p>
						</div>
					</div>
				</a>
			</article>

			<article class="column m7 anim-hover-grow">
				<a href="post.php?id=3">
					<img src="./img/better_branding.png" decoding="async" loading="lazy" alt="Article Cover" aria-hidden="true" class="img-fluid">
					<h2><b>5 Tips for Better Branding</b></h2>
					<p>From SEO to integrating with Paid Advertising, this article covers it all.</p>
					<br>
					<div class="author flexbox">
						<img src="./img/david_suns.png" decoding="async" loading="lazy" alt="David Suns" width="62" height="62">
						<div class="column">
							<b>David Suns</b>
							<p>Brand Manager</p>
						</div>
					</div>
				</a>
			</article>

		</section>
	</main>
	<footer class="flexbox m7">
		<div>
			<img src="./img/logo.svg" decoding="async" loading="lazy" alt="Unifeed">
		</div>
		<p>Unifeed © 2017 All Copyrights Not Reserved</p>
	</footer>
</body>

</html>