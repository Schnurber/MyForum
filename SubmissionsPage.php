<?php 
namespace MyForum;
/**
 * Page that lists all contributions. Further you can send a new post if you have not sent one yet. 
 */

final class SubmissionsPage extends lib\HomePage {
	use lib\DataBase;
	/*
	 * Evaluate when reloading
	 */
	protected function init(){
		$pre = self::prefix();
		if (isset($_POST["new"])){//New Entry
			$val=trim(htmlspecialchars($_POST["new"])) ;
			if ($val!=""){
				session_start();
				$thrd=$_GET['thread'];
				self::query("insert into {$pre}beitraege values (NULL,:thrd,:val)", array(':thrd'=>$thrd, ':val'=>$val));
				if (isset($_SESSION['posted'.$_GET['thread']])){
					return $this->render('submissions.php', 'sub_sent');
				} else {
					$_SESSION['posted'.$_GET['thread']]=true;
				}
			}
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
		$rows=self::query("select * from {$pre}beitraege where thread_ID=:thrd", array(':thrd'=>$thrd));
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
