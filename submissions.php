<?php $begin('sub_sent') ?>
<div class="alert">
	<strong>Warnung!</strong> Es wurde Bereits ein Beitrag gesendet!
</div>
<?php $end('sub_sent') ?>
<!----------------------------------------------->
<?php $begin('sub_subnav') ?>
<div class='subnav'>
<a class='btn btn-primary' href='index.php'>&Uuml;bersicht</a>
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
		<td colspan='2'><i class='icon-envelope'></i>&nbsp;<?= $row[2] ?></td>
	</tr>
<?php $end('sub_table_row') ?>
<!----------------------------------------------->
<?php $begin('sub_table_end') ?>
</table>
<form  class='well' action='<?= $uri ?>' method='post'>
	<label><i class='icon-share'></i>&nbsp;Neuer Beitrag</label><input name='new' type='text'  style='width:100%' maxlength='120'/>
	<input type='submit'  class='btn btn-success' value='Absenden' />
</form>
<?php $end('sub_table_end') ?>