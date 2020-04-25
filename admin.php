<?php $begin('admin_die') ?>
<div id='meldung'>Pleas log in!</div>
<?php $end('admin_die') ?>
<!----------------------------------------------->
<?php $begin('admin_subnav') ?>
<div class='subnav'>
	<a class='btn btn-primary' href='/index.html'>Overview</a>
</div>
<h2>Themen-Verwaltung</h2>
<?php $end('admin_subnav') ?>
<!----------------------------------------------->
<?php $begin('table_head') ?>
<form action="admin.html" method="post">
<table class="table table-striped table-bordered">
<?php $end('table_head') ?>
<!----------------------------------------------->
<?php $begin('table_row') ?>
	<tr>
		<td><?= self::icon('thread') ?>&nbsp;<?= $title ?></td><td align='right'>Delete</td>
		<td><input type='checkbox' name='<?= $name ?>' value='<?= $id ?>'></td>
	</tr>
<?php $end('table_row') ?>
<!----------------------------------------------->
<?php $begin('table_end') ?>
</table>
<div class="form-group">
<label for="newthread">New thread</label>
<input name="newthread" id="newthread" class="form-control" type="text" size="40" maxlength="90">
</div>
<input class="btn btn-success" type="submit" value=" Submit " />
<input class="btn btn-warning" type="reset" value=" Cancel" />
</form>
<?php $end('table_end') ?>
