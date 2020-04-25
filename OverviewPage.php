<?php 
namespace MyForum;


final class OverviewPage extends lib\HomePage {
	use lib\DataBase;
	
	protected function init(){
		//NIX
	}
	
	protected function body(){
		$result = '';
		$result .= $this->render('overview.php', 'table_head');
		$query=self::query("select * from tbl_threads");
		foreach ($query as $row) {
			$result .= $this->render('overview.php', 'table_row', array('row' => $row));
		}
		$result .= $this->render('overview.php', 'table_end');
		return $result;
	}
}
?>
