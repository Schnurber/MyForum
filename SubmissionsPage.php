<?php 
namespace MyForum;

final class SubmissionsPage extends lib\HomePage {
	use lib\DataBase;
	/*
	 * Beim Neuladen auswerten
	 */
	protected function init(){

		if (isset($_POST["new"])){//Neuer Eintrag
			$val=trim($_POST["new"]) ;
			if ($val!=""){
				session_start();
				//Entweder nur 1x
				if (isset($_SESSION['posted'.$_GET['thread']])){
					//die ("<div id='meldung'>Es wurde Bereits ein Beitrag gesendet!</div>");
					return $this->render('submissions.php', 'sub_sent');
				}else {
					$_SESSION['posted'.$_GET['thread']]=true;
					//TODO: Sollte aber ohne mysql sein, besser: pdo->unquote(...)
					$thrd=$_GET['thread'];
					self::query("insert into tbl_beitraege values (NULL,:thrd,:val)", array(':thrd'=>$thrd, ':val'=>$val));
				}
			}
		}
	}
	/*
	 * Ausgabe
	 */
	protected function body(){
		$thrd=$_GET['thread'];
		$thr = self::query("select name from tbl_threads where ID=:thrd", array(':thrd'=>$thrd));
		$ret="";
		$ret .= $this->render('submissions.php', 'sub_subnav', array('name' => $thr[0]['name']));
		$thrd=$_GET['thread'];
		$rows=self::query("select * from tbl_beitraege where thread_ID=:thrd", array(':thrd'=>$thrd));
		$ret .= $this->render('submissions.php', 'sub_table_head');
		foreach ($rows as $row) {
			$ret .= $this->render('submissions.php', 'sub_table_row', array('row' => $row));
		}
		$uri = "index.php?p=submissons&thread=$_GET[thread]";
		$ret .= $this->render('submissions.php', 'sub_table_end', array('uri' => $uri));
		return $ret;
	}
}
?>
