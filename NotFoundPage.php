<?php 
namespace MyForum;

/**
 * 404 Page
 */

final class NotFoundPage extends lib\HomePage {
	
	protected function init(){
		//do nothing
	}
	
	protected function body(){
		$result = '';
		$result .= $this->render('notfound.php', 'not');
		return $result;
	}
}
?>
