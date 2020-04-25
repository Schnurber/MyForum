<?php $begin('admin_die') ?>
<div id='meldung'>Bitte anmelden!</div>
<?php $end('admin_die') ?>
<!----------------------------------------------->
<?php $begin('admin_subnav') ?>
<div class='subnav'>
	<a class='btn btn-primary' href='index.php'>&Uuml;bersicht</a>
</div>
<h2>Themen-Verwaltung</h2>
<?php $end('admin_subnav') ?>
<!----------------------------------------------->
<?php $begin('table_head') ?>
<form action="index.php?p=admin" method="post">
<table class="table table-striped table-bordered">
<?php $end('table_head') ?>
<!----------------------------------------------->
<?php $begin('table_row') ?>
	<tr>
		<td><?= $title ?></td><td align='right'>L&ouml;schen?</td>
		<td><input type='checkbox' name='<?= $name ?>' value='<?= $id ?>'></td>
	</tr>
<?php $end('table_row') ?>
<!----------------------------------------------->
<?php $begin('table_end') ?>
</table>
<label>Neuer Thread</label>
<input name="newthread" type="text" size="40" maxlength="90"/>
<input class="btn btn-success" type="submit" value=" Absenden " />
<input class="btn btn-warning" type="reset" value=" Abbrechen" />
</form>
<?php $end('table_end') ?>
