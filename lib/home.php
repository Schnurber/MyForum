<!---------------Main Template------------------>
<?php $begin('header') ?>
<!DOCTYPE html>
<html lang="de" data-bs-theme="dark">
	<head>
	<title><?= $title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="/style/style.css" />
</head>
<body>
<nav class="navbar bg-body-secondary sticky-top shadow">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= $host ?>">
	<?= self::icon('pen') ?>
      MyForum
    </a>
	<a class="nav-link" href="login.html"><?= $person ?></a>
  </div>
</nav>
	<div class="container">
		<header id="overview">
			<h1 class="display-4">My awsome Forum</h1>
			<p class="lead">Write anything you want!</p>
		</header>
	<section class="bd-masthead mb-3">
<?php $end('header') ?>
<!----------------------------------------------->
<?php $begin('footer') ?>
		</section>
		<footer class="py-3 my-4 border-top">
			<p>&copy; <?=date("Y")?> by Dieter Meiller</p>
		</footer>
	</div>
</body>
</html>
<?php $end('footer') ?>

