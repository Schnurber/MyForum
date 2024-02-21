<?php 
namespace MyForum;
/**
 * Page that lists all contributions. 
 */

final class SubmissionsPage extends lib\HomePage {
	use lib\DataBase;
	/*
	 * Evaluate when reloading
	 */
	protected function init(){
		session_start();
		$pre = self::prefix();
		$thrd=$_GET['thread'];
		if (isset($_POST["new"])){//New Entry
			$val=trim(htmlspecialchars($_POST["new"])) ;
			if ($val!=""){
				self::query("insert into {$pre}posts values (NULL,:thrd,:val)", array(':thrd'=>$thrd, ':val'=>$val));
				if (!isset($_SESSION['posted'.$thrd])){
					$_SESSION['posted'.$thrd]=true;
				}
			}
		}
		if (!isset($_SESSION['posted'.$thrd])){
			return $this->render('submissions.php', 'sub_first');
		}
	}
	/*
	 * Output
	 */
	protected function body(){
		$pre = self::prefix();
		$thrd=$_GET['thread'];
		$thr = self::query("select name from {$pre}threads where ID=:thrd", array(':thrd'=>$thrd));
		$ret="";
		$ret .= $this->render('submissions.php', 'sub_subnav', array('name' => $thr[0]['name']));
		$thrd=$_GET['thread'];
		$rows=self::query("select * from {$pre}posts where thread_ID=:thrd", array(':thrd'=>$thrd));
		$ret .= $this->render('submissions.php', 'sub_table_head');
		foreach ($rows as $row) {
			$ret .= $this->render('submissions.php', 'sub_table_row', array('row' => $row));
		}
		$uri = "../submissons/$_GET[thread].html";
		$ret .= $this->render('submissions.php', 'sub_table_end', array('uri' => $uri));
		return $ret;
	}
}
?>
