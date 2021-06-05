<?php

if (!isset($_POST["email"])) {
	http_response_code(400);
	die("No email provided.");
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "vendor/autoload.php";

$mail = new PHPMailer(true);

try {
	$mail->isSMTP();
	$mail->Host = "s1.ct8.pl"; // replace with your own host
	$mail->SMTPAuth = true;
	$mail->Username = "admin@pzpl.xyz"; // replace with your own username
	$mail->Password = "you're not getting my email password"; // replace with your own password
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
	$mail->Port = 587;

	$mail->setFrom("admin@pzpl.xyz", "Remix");
	$mail->addAddress($_POST["email"]);

	$mail->isHTML(true);
	$mail->Subject = "Activate your Remix Account";
	$mail->Body = file_get_contents("email_body.view.php");
	$mail->AltBody = "Please ignore this email if you did not sign up.
	Your Remix account has been activated! Sadly, our developers haven't made the dashbaord yet so you can't use the service yet, sorry!";

	$mail->send();
} catch (Exception $e) {
	echo "Something went wrong!";	
}

?>

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
		<div class="navbar-right">
			<div class="mode-switch">
				<button class="btn btn-dark">
					<img src="./img/light.svg" decoding="async" loading="lazy" alt="Sun" aria-hidden="true"> Light
				</button>
				<button class="btn btn-dark" data-active>
					<img src="./img/moon.svg" decoding="async" loading="lazy" alt="Moon" aria-hidden="true">
					Dark
				</button>
			</div>
		</div>
	</nav>

	<main id="onboarding">
		<h1>Message Sent!</h1>
	</main>
	<!-- 
		I Decided to play around with analytics, see if they provide any useful data for my website
		Decided on Plausible, since Google Analytics & Yandex.Metrica invade user's privacy, and Matomo weights 20kB!
		I made the analytics public, so you can just go to https://plausible.io/pzpl.xyz?page=%2Fcodewell%2Fremix%2F and see them for yourself.
	-->
	<script async defer data-domain="pzpl.xyz" src="https://plausible.io/js/plausible.js"></script>
	<script src="./darkMode.js" defer async></script>
</body>

</html>