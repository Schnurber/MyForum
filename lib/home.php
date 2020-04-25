<!---------------Main Template------------------>
<?php $begin('header') ?>
<!DOCTYPE html>
<html lang="de">
	<head>
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<title><?= $title ?></title>
	<link rel="stylesheet" type="text/css" href="lib/style.css" />
</head>
<body>
	<div class="container">
		<header  id="overview" class="hero-unit">
			<h1>Schwarzes Brett</h1>
			<p class="lead">Schreibe was Du willst!</p>
		</header>
		<section>
<?php $end('header') ?>
<!----------------------------------------------->
<?php $begin('footer') ?>
		</section>
		<footer>
			<p>&copy; <?=date("Y")?> by Dieter Meiller</p>
		</footer>
	</div>
</body>
</html>
<?php $end('footer') ?>

