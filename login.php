<?php $begin('login') ?>
<div class="subnav">
<a class="btn btn-primary" href="index.html"><?= t('OVERVIEW') ?></a>
</div>
<h2><?= t('LOGIN') ?></h2>
<form action="login.html" method="post">
	<div class="form-group row">
		<label for="user" class="col-sm-2 col-form-label"><?= t('USERNAME') ?></label>
		<div class="col-sm-10">
			<input name="user" id="user" type="text" size="20" maxlength="40">
		</div>
	</div>
	<div class="form-group row">
		<label for="pass" class="col-sm-2 col-form-label"><?= t('PASSWORD') ?></label>
		<div class="col-sm-10">
			<input name="pass" id="pass" type="password" size="20" maxlength="40">
		</div>
	</div>
    <button type='submit'  class='btn btn-success' value='<?= t('LOGIN') ?>'><?= t('LOGIN') ?></button>
</form>
<?php $end('login') ?>

