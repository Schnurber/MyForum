<?php $begin('sub_sent') ?>
<div class="alert alert-danger">
	<strong>Warning!</strong> There has already been sent a post!
</div>
<?php $end('sub_sent') ?>
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
	<input name='new' type='text' class="form-control" id="newentry" style='width:100%' maxlength='120'>
</div>
<button type='submit'  class='btn btn-success' value='Send'>Submit</button>
</form>
<?php $end('sub_table_end') ?>