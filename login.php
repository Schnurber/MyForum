<?php $begin('login') ?>
<div class="subnav">
<a class="btn btn-primary" href="index.php">&Uuml;bersicht</a>
</div>
<h2>Login</h2>
<form class="well" action="index.php?p=login" method="post">
	<label>Benutzername:</label>
	<input name="user" type="text" size="20" maxlength="40"/>
	<label>Passwort:</label>
	<input name="pass" type="password" size="20" maxlength="40"/>
    <input class="btn btn-success" type="submit" value=" Login " />
</form>
<?php $end('login') ?>