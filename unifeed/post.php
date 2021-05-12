<?php

require_once "../Headers.php";

$articles = [
	[
		"title" => "Weekly Newsletter: Tweets for Higher Engagements",
		"image" => "featured_article.png"
	],
	[
		"title" => "7 Tips for Organic Traffic",
		"image" => "organic_traffic.png"
	],
	[
		"title" => "How To Start Your Own Business",
		"image" => "start_buisness.png"
	],
	[
		"title" => "5 Tips for Better Branding",
		"image" => "better_branding.png"
	]
];

?>


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
			<a href="./index.php">
				<img src="./img/logo.svg" decoding="async" loading="lazy" alt="Unifeed" class="navbar-brand">
			</a>
		</div>
		<ul>
			<li><a href="./index.php">Home</a></li>
			<li><a href="javascript:alert('Sorry, this feature is not avalible yet.');">Features</a></li>
			<li><a href="javascript:alert('Sorry, this feature is not avalible yet.');">Pricing</a></li>
			<li><a href="javascript:alert('Sorry, this feature is not avalible yet.');" class="btn btn-danger btn-lg"><b>Subscribe</b></a></li>
		</ul>
	</nav>
	<main class="m7 post">
		<div class="flexbox">
			<img src="./img/<?= $articles[$_GET["id"]]["image"] ?>" decoding="async" loading="lazy" alt="Cover image" width="500" class="m7">
			<h1 class="column d3"><?= $articles[$_GET["id"]]["title"] ?></h1>
		</div>
		<p>
			Nisi elit consectetur laboris labore commodo eu fugiat ea minim consectetur minim ea nisi ipsum. Irure dolor deserunt est sunt veniam exercitation aute in nostrud nostrud ipsum qui occaecat. Id anim pariatur eiusmod irure elit deserunt aliqua labore exercitation laboris reprehenderit culpa. Laboris laborum est qui anim velit. Enim consequat in incididunt excepteur veniam exercitation deserunt aliquip ad commodo occaecat aliqua est magna. Veniam commodo magna culpa aliqua labore Lorem cupidatat consequat. In consectetur ad anim amet excepteur elit incididunt cupidatat quis.

			Tempor cupidatat ut est Lorem cupidatat. Ea commodo enim ea exercitation adipisicing commodo esse cillum adipisicing ipsum elit. Laboris mollit velit non consequat. Ea adipisicing in cillum nostrud non in Lorem do et. Dolor in irure ipsum aute ullamco id et commodo nisi occaecat exercitation amet ad id.

			Id incididunt tempor elit mollit esse aliquip sunt quis. Laborum pariatur nulla cupidatat nulla cillum. Adipisicing sint aliquip reprehenderit laboris sint. Quis ex anim proident reprehenderit adipisicing commodo anim fugiat proident duis officia. Aliquip reprehenderit exercitation eu in. Laborum aliquip labore reprehenderit consectetur esse deserunt nostrud dolor nisi officia occaecat nisi ullamco aliquip.

			Ad aliqua velit dolore sint anim cillum excepteur. Amet consectetur cupidatat sit in nisi ad eiusmod et adipisicing sint magna Lorem. Exercitation nisi culpa mollit anim proident adipisicing elit officia labore in in commodo ipsum nulla.

			Duis ad nisi amet Lorem id aliqua laborum minim velit culpa. Ullamco adipisicing commodo occaecat veniam. In aliquip minim officia do in esse veniam eu id ut qui exercitation. Laborum sit voluptate ad et est non eiusmod in.

			Lorem esse exercitation consectetur magna nulla laboris cupidatat aute. Lorem enim tempor elit sint occaecat esse voluptate adipisicing amet enim quis anim ullamco. Mollit reprehenderit consequat ex officia cupidatat sunt nostrud et eu dolore ullamco. Aute proident nulla do voluptate exercitation amet velit qui quis et fugiat Lorem minim adipisicing.

			Officia sunt ex duis sint sunt cillum pariatur nostrud et amet enim ullamco aute. Minim duis occaecat anim quis duis ex laborum est sunt sint cillum culpa ea aliquip. Cupidatat deserunt reprehenderit Lorem magna irure anim ullamco.

			Non ut ea mollit fugiat. Magna enim est anim laborum magna nulla aute fugiat est esse deserunt. Aliquip id consectetur non adipisicing commodo consectetur ullamco quis. Laboris adipisicing mollit exercitation reprehenderit ipsum Lorem do aute proident. Nulla exercitation ex sint ea.

			Reprehenderit dolor eu aliquip pariatur sunt nostrud nulla consectetur duis duis. Anim do pariatur ad cupidatat ipsum est eiusmod sit. Sunt irure occaecat minim deserunt occaecat. Adipisicing mollit eiusmod cupidatat aliqua adipisicing consectetur. Officia Lorem sunt mollit et deserunt non in sint sit. Tempor enim fugiat pariatur veniam qui tempor esse anim velit. Elit anim ipsum amet sit aliquip in id pariatur duis ut ea.

			Mollit laborum incididunt esse sint eiusmod cillum excepteur deserunt aute. Labore culpa ullamco enim aute anim sunt dolore. Officia sit mollit in occaecat magna magna ad excepteur anim laboris ex deserunt reprehenderit. Sit nisi dolor nulla esse nisi eiusmod excepteur aliqua eu. Quis nisi ad id non. Aute mollit magna adipisicing ad nisi id enim incididunt dolore officia culpa.

			Velit aliquip Lorem incididunt ea irure ea. Sit laborum cillum ut fugiat consequat Lorem sit anim sint veniam. Ad officia duis nulla Lorem dolore aliquip dolore officia eu. Anim tempor velit nostrud esse veniam sint minim. Proident deserunt elit reprehenderit culpa tempor reprehenderit fugiat anim eiusmod sint ad. Ea id sit exercitation ad dolor esse magna ad aute mollit ipsum eu consectetur.

			Mollit voluptate ullamco aliqua nostrud mollit sit minim est amet. Tempor sint ut qui ut proident adipisicing ad elit dolor labore fugiat magna consectetur. Velit id sunt aute consectetur reprehenderit proident officia velit enim ut aute et.

			Adipisicing sint commodo anim ipsum magna aute qui ea do reprehenderit sint. Occaecat ipsum officia culpa in. Labore qui laborum esse duis mollit tempor occaecat commodo cillum. Sit tempor ea culpa qui sint mollit ex esse aliqua exercitation magna laboris tempor cupidatat.

			Eiusmod officia non aute enim reprehenderit. Lorem irure cupidatat commodo nostrud voluptate qui. Est nisi dolor ad tempor commodo esse aute.

			Cillum nostrud minim esse velit voluptate excepteur cillum. Non sunt deserunt id minim quis officia exercitation dolore voluptate voluptate aliqua ipsum. Dolor excepteur magna qui ad pariatur proident dolor magna Lorem. Aute aute laboris ex cupidatat adipisicing aute tempor ut voluptate nisi duis ex et proident. Magna cillum consectetur sint elit.

			Laborum quis duis irure incididunt pariatur est nostrud voluptate dolor commodo et incididunt occaecat. Ullamco deserunt nulla id reprehenderit non aliqua commodo occaecat excepteur velit amet reprehenderit. Consequat culpa ut eu cupidatat. Magna et in proident nulla fugiat velit duis deserunt non esse nostrud fugiat.

			Proident quis eu sit eu do cillum ad. Reprehenderit nisi ad ut consequat tempor laboris velit est dolor magna anim sint. Quis ullamco ea id cillum voluptate officia ex officia excepteur ut cillum. Commodo voluptate exercitation fugiat est laboris velit consectetur consectetur mollit veniam adipisicing qui nisi. Laboris ut consectetur Lorem do. Officia labore esse adipisicing excepteur.

			Eu magna sint cillum est occaecat magna ipsum mollit fugiat officia irure amet irure. Labore Lorem esse veniam ut incididunt velit do eiusmod culpa esse in quis laboris. Veniam anim nulla ea in veniam est labore sit dolor do irure.

			Pariatur quis duis labore veniam anim pariatur sunt incididunt esse ullamco excepteur mollit. Proident incididunt nulla pariatur sint ex ullamco ad deserunt adipisicing veniam nulla proident. Excepteur occaecat dolore officia eiusmod eu nostrud excepteur Lorem consequat velit. Est sint enim laboris commodo ea voluptate ut. Voluptate dolor cupidatat eiusmod est anim pariatur voluptate fugiat commodo anim aliquip incididunt.

			Deserunt nostrud velit sint minim. Officia ullamco ipsum enim reprehenderit nisi dolore in in consectetur. Labore id ad minim duis elit ut adipisicing veniam consectetur laborum amet qui occaecat cupidatat. Voluptate amet ipsum irure officia culpa incididunt aute pariatur adipisicing incididunt eu nulla dolore. Est nulla ipsum ut proident ea pariatur in nisi consectetur. Culpa duis incididunt ea cupidatat incididunt sint. Commodo aliqua anim eu magna non.
		</p>
	</main>
	<footer class="flexbox m7">
		<div>
			<img src="./img/logo.svg" decoding="async" loading="lazy" alt="Unifeed">
		</div>
		<p>Unifeed © 2017 All Copyrights Not Reserved</p>
	</footer>
</body>

</html>