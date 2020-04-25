<?php $begin('table_head') ?>
<div class='subnav'>
	<a class='btn btn-primary' href='index.php?p=login'>login</a>
</div>
<h2>Hier ist eine Liste aller Themen:</h2>
<table class='table table-striped table-bordered'>
<?php $end('table_head') ?>
<!----------------------------------------------->
<?php $begin('table_row') ?>
<tr>
	<td>
		<i class='icon-inbox'></i>&nbsp;
		<a href='index.php?p=submissons&thread=<?= $row[0] ?>'><?= $row[1] ?></a>
	</td>
</tr>
<?php $end('table_row') ?>
<!----------------------------------------------->
<?php $begin('table_end') ?>
</table>
<?php $end('table_end') ?>
