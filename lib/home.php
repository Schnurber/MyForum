<!---------------Main Template------------------>
<?php $begin('header') ?>
<!DOCTYPE html>
<html lang="de">
	<head>
	<title><?= $title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="/style/style.css" />
</head>
<body>
	<div class="container">
		<header  id="overview" class="jumbotron">
			<h1 class="display-4">My awsome Forum</h1>
			<p class="lead">Write anything you want!</p>
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

