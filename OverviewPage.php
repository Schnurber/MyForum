<?php 
namespace MyForum;

/**
 * Overview of all threads
 */

final class OverviewPage extends lib\HomePage {
	use lib\DataBase;
	
	protected function init(){
		//do nothing
	}
	
	protected function body(){
		$result = '';
		$result .= $this->render('overview.php', 'table_head', array(
			'person' => isset($_SESSION['loggedin']) ? "Admin" : "Login"
		));
		$pre = self::prefix();
		$query=self::query("select * from {$pre}threads");
		foreach ($query as $row) {
			$result .= $this->render('overview.php', 'table_row', array('row' => $row));
		}
		$result .= $this->render('overview.php', 'table_end');
		return $result;
	}
}
?>
