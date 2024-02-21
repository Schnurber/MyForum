<?php $begin('sub_first') ?>
<div class="alert alert-primary">
	<strong>Start posting!</strong> Share your first message in this category!
</div>
<?php $end('sub_first') ?>
<!----------------------------------------------->
<?php $begin('sub_subnav') ?>
<div class='subnav'>
<a class='btn btn-primary' href='../index.html'>Overview</a>
</div>
<h2><?= $name ?></h2>
<?php $end('sub_subnav') ?>
<!----------------------------------------------->
<?php $begin('sub_table_head') ?>
<table class='table table-striped table-bordered'>
<?php $end('sub_table_head') ?>
<!----------------------------------------------->
<?php $begin('sub_table_row') ?>
	<tr>
		<td colspan='2'><?= self::icon('envelope') ?>&nbsp;<?= $row[2] ?></td>
	</tr>
<?php $end('sub_table_row') ?>
<!----------------------------------------------->
<?php $begin('sub_table_end') ?>
</table>
<form action='<?= $uri ?>' method='post'>
<div class="form-group">
	<label for="newentry"><?= self::icon('share') ?>&nbsp;Neuer Beitrag</label>
	<input name='new' type='text' class="form-control mt-1" id="newentry" style='width:100%' maxlength='120'>
</div>
<button type='submit' class='btn btn-success mt-3' value='Send'>Submit</button>
</form>
<?php $end('sub_table_end') ?>