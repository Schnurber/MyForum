<?php $begin('table_head') ?>
<div class='subnav'>
	<a class='btn btn-primary' href='login.html'><?= $person ?></a>
</div>
<h2>Here is a list of all topics:</h2>
<table class='table table-striped table-bordered'>
<?php $end('table_head') ?>
<!----------------------------------------------->
<?php $begin('table_row') ?>
<tr>
	<td>
		<?= self::icon('thread') ?>
		<a href= 'submissons/<?= $row[0] ?>.html'><?= $row[1] ?></a>
	</td>
</tr>
<?php $end('table_row') ?>
<!----------------------------------------------->
<?php $begin('table_end') ?>
</table>
<?php $end('table_end') ?>
