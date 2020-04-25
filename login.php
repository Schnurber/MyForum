<?php $begin('login') ?>
<div class="subnav">
<a class="btn btn-primary" href="index.html">Overview</a>
</div>
<h2>Login</h2>
<form class="well" action="login.html" method="post">
	<label>Benutzername:</label>
	<input name="user" type="text" size="20" maxlength="40"/>
	<label>Passwort:</label>
	<input name="pass" type="password" size="20" maxlength="40"/>
    <input class="btn btn-success" type="submit" value=" Login " />
</form>
<?php $end('login') ?>
