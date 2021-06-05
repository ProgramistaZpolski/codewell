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
			<a href="./index.php">
				<img src="./img/remix.svg" decoding="async" loading="lazy" alt="Remix logo" class="navbar-brand">
			</a>
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
			<a href="./setup_remix.php">
				<button class="btn btn-danger">
					<img src="./img/figma-logo.svg" decoding="async" loading="lazy" alt="Figma" aria-hidden="true" width="14" height="21"> Get Figma Plugin
				</button>
			</a>
		</div>
	</nav>

	<main itemscope itemtype="https://schema.org/Product">
		<meta itemprop="name" content="Remix">
		<section id="hero" class="flexbox">
			<div class="column">
				<h1 class="d4">
					<b>Developer hand-off <br>has <span id="never-been-easier">never</span> been <br>easier</b>
				</h1>
				<p itemprop="description">
					Remix is a Figma and Sketch plugin that was made with Developers in mind.
					Create custom React components in seconds, copy CSS code in one click, and export your assets effortlessly.
				</p>
				<a href="./setup_remix.php">
					<button class="btn btn-lg btn-danger">
						<img src="./img/figma-logo.svg" decoding="async" loading="lazy" alt="Figma" aria-hidden="true" width="14" height="21"> <b>Get Figma Plugin</b>
					</button>
				</a>
			</div>
			<img src="./img/hero.svg" decoding="async" loading="lazy" alt="Hero image" class="column">
		</section>
		<section id="collaboration" class="flexbox flexbox-not-tablet">
			<div class="column">
				<h2>Collaboration has never been easier.</h2>
				<p>With Remix, you will be able to actively collaborate with developers in real-time. No more back-and-forth emails and Slack messages to get that design perfect.</p>
				<a href="javascript:alert('so basically we have collaboration that is hosted on a 1$ vps - this ensures that our software is π/31 % lag-free.');">Learn mode</a>
			</div>
			<img src="./img/collaboration.png" decoding="async" loading="lazy" alt="Collaboration" width="514" height="385">
		</section>
		<section id="reviews" class="flexbox flexbox-not-tablet">
			<div class="column">
				<div itemprop="review" itemscope itemtype="https://schema.org/Review">
					<meta itemprop="datePublished" content="2021-04-01">
					<div class="flexbox">
						<img src="./img/useravatar/t1.png" decoding="async" loading="lazy" alt="Jesse Hendricks" width="98" height="98">
						<div class="column">
							<p itemprop="reviewBody">“Developers, you no longer need to spend hours translating designs.”</p>
							<p itemprop="author">Jesse Hendricks</p>
							<meta itemprop="ratingValue" content="5">
							<meta itemprop="bestRating" content="5">
							<img src="./img/star.svg" decoding="async" loading="lazy" alt="Star" width="26" height="26">
							<img src="./img/star.svg" decoding="async" loading="lazy" alt="Star" width="26" height="26">
							<img src="./img/star.svg" decoding="async" loading="lazy" alt="Star" width="26" height="26">
							<img src="./img/star.svg" decoding="async" loading="lazy" alt="Star" width="26" height="26">
							<img src="./img/star.svg" decoding="async" loading="lazy" alt="Star" width="26" height="26">
						</div>
					</div>
				</div>
				<div itemprop="review" itemscope itemtype="https://schema.org/Review">
					<meta itemprop="datePublished" content="2021-04-29">
					<div class="flexbox">
						<img src="./img/useravatar/t2.png" decoding="async" loading="lazy" alt="Mia Andrews" width="98" height="98">
						<div class="column">
							<p>“Remix has been a life saver when it comes to developer hand off.”</p>
							<p>Mia Andrews</p>
							<meta itemprop="ratingValue" content="5">
							<meta itemprop="bestRating" content="5">
							<img src="./img/star.svg" decoding="async" loading="lazy" alt="Star" width="26" height="26">
							<img src="./img/star.svg" decoding="async" loading="lazy" alt="Star" width="26" height="26">
							<img src="./img/star.svg" decoding="async" loading="lazy" alt="Star" width="26" height="26">
							<img src="./img/star.svg" decoding="async" loading="lazy" alt="Star" width="26" height="26">
							<img src="./img/star.svg" decoding="async" loading="lazy" alt="Star" width="26" height="26">
						</div>
					</div>
				</div>
			</div>
			<div class="column">
				<h3>What our users say</h3>
				<p>We have cultivated a growing community for developers, and that matters to us. See what our users are saying.</p>
				<br>
				<div>
					<p><b itemprop="ratingValue">5.0</b> Rating</p> <img src="./img/star.svg" decoding="async" loading="lazy" alt="Star" width="26" height="26">
				</div>
				<div>
					<p><b>2400+</b> Developers</p>
					<div class="avatar-stack">
						<img src="./img/useravatar/1.png" decoding="async" loading="lazy" alt="User Avatar" aria-hidden="true">
						<img src="./img/useravatar/2.png" decoding="async" loading="lazy" alt="User Avatar" aria-hidden="true">
						<img src="./img/useravatar/3.png" decoding="async" loading="lazy" alt="User Avatar" aria-hidden="true">
						<img src="./img/useravatar/4.png" decoding="async" loading="lazy" alt="User Avatar" aria-hidden="true">
						<img src="./img/useravatar/5.png" decoding="async" loading="lazy" alt="User Avatar" aria-hidden="true">
						<img src="./img/useravatar/6.png" decoding="async" loading="lazy" alt="User Avatar" aria-hidden="true">
					</div>
				</div>
			</div>
		</section>
		<section id="guide">
			<div class="flexbox flexbox-not-tablet">
				<div class="column">
					<div>
						<h4 class="h1">
							<b>Get the Ultimate <br>Developer Hand Off Guide</b>
						</h4>
						<p>
							A guide with 120+ hours worth of content to guide you on how to perfectly hand over your designs to your developers. Best part? It’s completely free.
						</p><br>
						<div class="flexbox">
							<div class="inputs column">
								<label for="email">Enter your email address</label>
								<input type="email" name="email" id="email" placeholder="hello@example.com">
							</div>
							<button class="btn btn-dark btn-lg"><b>Send me the guide</b></button>
						</div>
					</div>
				</div>
				<img src="./img/illustrations.png" decoding="async" loading="lazy" alt="People" aria-hidden="true" width="461" height="412">
			</div>
		</section>
		<section id="pricing" class="flexbox">
			<div class="column" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
				<p class="plan_name">Basic</p>
				<p>
					<span itemprop="priceCurrency" content="USD">$</span>
					<span itemprop="price" content="39.00">39</span>
					<small>/mo</small>
				</p>
				<link itemprop="availability" href="https://schema.org/OnlineOnly">
				<p>Suited for small teams with minimal developer handoffs.</p>
				<ul>
					<li>
						Web access only.
					</li>
					<li>
						20 Handoffs per month.
					</li>
					<li>
						2 members.
					</li>
					<li>
						Offline editing only.
					</li>
				</ul>
				<br>
				<button class="btn btn-danger btn-lg btn-block">Subscribe</button>
			</div>
			<div class="column highlight_plan" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
				<p class="plan_name">Starter</p>
				<p>
					<span itemprop="priceCurrency" content="USD">$</span>
					<span itemprop="price" content="59.00">59</span>
					<small>/mo</small>
				</p>
				<link itemprop="availability" href="https://schema.org/OnlineOnly">
				<p>Suited for medium businesses with a lot of handoffs.</p>
				<ul>
					<li>
						Web & Figma Plugin.
					</li>
					<li>
						60 Handoffs per month.
					</li>
					<li>
						4 members.
					</li>
					<li>
						Live editing.
					</li>
				</ul>
				<br>
				<button class="btn btn-danger btn-lg btn-block">Subscribe</button>
			</div>
			<div class="column" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
				<p class="plan_name">Pro</p>
				<p>
					<span itemprop="priceCurrency" content="USD">$</span>
					<span itemprop="price" content="129.00">129</span>
					<small>/mo</small>
				</p>
				<link itemprop="availability" href="https://schema.org/OnlineOnly">
				<p>Suited for enterprises with daily developer handoffs.</p>
				<ul>
					<li>
						Web & Figma Plugin.
					</li>
					<li>
						500+ Handoffs per month.
					</li>
					<li>
						Unlimited members.
					</li>
					<li>
						Live editing.
					</li>
				</ul>
				<br>
				<button class="btn btn-danger btn-lg btn-block">Subscribe</button>
			</div>

		</section>
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
		<div class="footer-bottom">
			<div class="flexbox">
				<p>© Remix 2021</p>
				<div>
					<a href="mailto:admin@pzpl.xyz">support@remix.com</a>
					<a href="javascript:alert('sorry we dont know how to use twitter');">
						<img src="./img/twitter.svg" decoding="async" loading="lazy" alt="twitter" width="24" height="24">
					</a>
					<a href="https://youtu.be/BylLTX05jSY?t=7783">
						<img src="./img/facebook.svg" decoding="async" loading="lazy" alt="facebook" width="24" height="24">
					</a>
				</div>
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
</body>

</html>